FROM php:8.2-fpm AS base

WORKDIR /app

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && apt-get install -y \
        git \
        nginx \
        unzip \
        libcurl4-openssl-dev \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libonig-dev \
        libpq-dev \
        libpng-dev \
        libsqlite3-dev \
        libxml2-dev \
        libzip-dev \
        sqlite3 \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        bcmath \
        exif \
        gd \
        intl \
        opcache \
        pdo_pgsql \
        pdo_mysql \
        zip \
    && cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && { \
        echo "opcache.enable=1"; \
        echo "opcache.enable_cli=1"; \
        echo "opcache.validate_timestamps=0"; \
        echo "opcache.memory_consumption=128"; \
        echo "opcache.interned_strings_buffer=16"; \
        echo "opcache.max_accelerated_files=20000"; \
    } > "$PHP_INI_DIR/conf.d/opcache-recommended.ini" \
    && rm -f \
        /etc/nginx/sites-enabled/default \
        /etc/nginx/sites-available/default \
        /etc/nginx/conf.d/default.conf \
    && { \
        echo 'server {'; \
        echo '    listen 80 default_server;'; \
        echo '    listen [::]:80 default_server;'; \
        echo '    server_name _;'; \
        echo '    root /app/public;'; \
        echo '    index index.php index.html;'; \
        echo; \
        echo '    location / {'; \
        echo '        try_files $uri $uri/ /index.php?$query_string;'; \
        echo '    }'; \
        echo; \
        echo '    location ~ \.php$ {'; \
        echo '        include fastcgi_params;'; \
        echo '        fastcgi_pass 127.0.0.1:9000;'; \
        echo '        fastcgi_index index.php;'; \
        echo '        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;'; \
        echo '        fastcgi_param DOCUMENT_ROOT $realpath_root;'; \
        echo '        fastcgi_read_timeout 300;'; \
        echo '    }'; \
        echo; \
        echo '    location ~ /\.(?!well-known).* {'; \
        echo '        deny all;'; \
        echo '    }'; \
        echo '}'; \
    } > /etc/nginx/conf.d/app.conf \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

FROM base AS vendor

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

FROM node:20-bookworm-slim AS assets

WORKDIR /app

COPY package.json package-lock.json vite.config.js ./

RUN npm ci

COPY resources ./resources
COPY public ./public
COPY --from=vendor /app/vendor ./vendor

RUN npm run build

FROM base AS final

COPY . .
COPY --from=vendor /app/vendor ./vendor
COPY --from=assets /app/public/build ./public/build

RUN { \
        echo '#!/bin/sh'; \
        echo 'set -e'; \
        echo; \
        echo 'cd /app'; \
        echo; \
        echo 'if [ ! -f .env ] && [ -f .env.example ]; then'; \
        echo '    cp .env.example .env'; \
        echo 'fi'; \
        echo; \
        echo "if [ -f .env ] && ! grep -q '^APP_KEY=base64:' .env; then"; \
        echo '    php artisan key:generate --force --ansi >/dev/null 2>&1 || true'; \
        echo 'fi'; \
        echo; \
        echo 'if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then'; \
        echo '    DB_FILE="${DB_DATABASE:-/app/database/database.sqlite}"'; \
        echo; \
        echo '    case "$DB_FILE" in'; \
        echo '        /*) ;;'; \
        echo '        *) DB_FILE="/app/$DB_FILE" ;;'; \
        echo '    esac'; \
        echo; \
        echo '    mkdir -p "$(dirname "$DB_FILE")"'; \
        echo '    touch "$DB_FILE"'; \
        echo '    chown www-data:www-data "$DB_FILE" 2>/dev/null || true'; \
        echo 'fi'; \
        echo; \
        echo 'if [ ! -L public/storage ]; then'; \
        echo '    php artisan storage:link --ansi >/dev/null 2>&1 || true'; \
        echo 'fi'; \
        echo; \
        echo 'if [ "${RUN_MIGRATIONS:-false}" = "true" ]; then'; \
        echo '    php artisan migrate --force --ansi'; \
        echo 'fi'; \
        echo; \
        echo 'exec "$@"'; \
    } > /usr/local/bin/docker-entrypoint \
    && { \
        echo '#!/bin/sh'; \
        echo 'set -e'; \
        echo 'php-fpm -D'; \
        echo 'exec nginx -g "daemon off;"'; \
    } > /usr/local/bin/start-services \
    && chmod +x /usr/local/bin/docker-entrypoint \
    && chmod +x /usr/local/bin/start-services \
    && mkdir -p \
        bootstrap/cache \
        storage/framework/cache \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/views \
        storage/framework/testing \
        storage/logs \
    && touch database/database.sqlite \
    && chown -R www-data:www-data bootstrap/cache database storage \
    && chmod -R ug+rwx bootstrap/cache database storage \
    && composer dump-autoload --optimize --no-dev --no-interaction --no-scripts

EXPOSE 80 9000

ENTRYPOINT ["docker-entrypoint"]
CMD ["start-services"]
