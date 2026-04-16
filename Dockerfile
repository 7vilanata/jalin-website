FROM php:8.2-apache AS base

WORKDIR /var/www/html

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public \
    COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && apt-get install -y \
        git \
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
        curl \
        dom \
        exif \
        gd \
        intl \
        mbstring \
        opcache \
        pdo_pgsql \
        pdo_mysql \
        pdo_sqlite \
        simplexml \
        xml \
        xmlreader \
        xmlwriter \
        zip \
    && a2enmod rewrite headers \
    && cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && { \
        echo "opcache.enable=1"; \
        echo "opcache.enable_cli=1"; \
        echo "opcache.validate_timestamps=0"; \
        echo "opcache.memory_consumption=128"; \
        echo "opcache.interned_strings_buffer=16"; \
        echo "opcache.max_accelerated_files=20000"; \
    } > "$PHP_INI_DIR/conf.d/opcache-recommended.ini" \
    && sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
        /etc/apache2/sites-available/*.conf \
        /etc/apache2/apache2.conf \
        /etc/apache2/conf-available/*.conf \
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
COPY --from=vendor /var/www/html/vendor ./vendor

RUN npm run build

FROM base AS final

COPY . .
COPY --from=vendor /var/www/html/vendor ./vendor
COPY --from=assets /app/public/build ./public/build

RUN { \
        echo '#!/bin/sh'; \
        echo 'set -e'; \
        echo; \
        echo 'cd /var/www/html'; \
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
        echo '    DB_FILE="${DB_DATABASE:-/var/www/html/database/database.sqlite}"'; \
        echo; \
        echo '    case "$DB_FILE" in'; \
        echo '        /*) ;;'; \
        echo '        *) DB_FILE="/var/www/html/$DB_FILE" ;;'; \
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
    && chmod +x /usr/local/bin/docker-entrypoint \
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

EXPOSE 80

ENTRYPOINT ["docker-entrypoint"]
CMD ["apache2-foreground"]
