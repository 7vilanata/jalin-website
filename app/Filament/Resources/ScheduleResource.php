<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Get;
use Illuminate\Support\HtmlString;


class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Schedules';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish Schedule')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Select::make('type_hub')
                    ->label('Type Hub')
                    ->options([
                        'RAWplace' => 'RAWplace',
                        'RAWkop' => 'RAWkop',
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->disk('public')
                    ->directory('images')
                    ->columnSpanFull()
                    ->visibility('public')
                    ->preserveFilenames()
                    ->label('Thumbnail')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\Group::make([

                    Forms\Components\DatePicker::make('schedule_date')
                        ->default(now())
                        ->timezone('Asia/Jakarta')
                        ->required()
                        ->label('Date'),
                    Forms\Components\TimePicker::make('start_time')
                        ->default(now())
                        ->timezone('Asia/Jakarta')
                        ->required(),
                ])
                    ->columns(2),

                Forms\Components\Group::make([
                    Forms\Components\Select::make('location')
                        ->label('Location')
                        ->options([
                            'Jakarta Utara' => 'Jakarta Utara',
                            'Jakarta Barat' => 'Jakarta Barat',
                            'Jakarta Pusat' => 'Jakarta Pusat',
                            'Jakarta Timur' => 'Jakarta Timur',
                            'Jakarta Selatan' => 'Jakarta Selatan',
                        ])
                        ->searchable()
                        ->required(),

                    Forms\Components\TextInput::make('street_loc')
                        ->label('Street Location')
                        ->required(),
                ])
                    ->columns(2),

                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('subtitle')->required(),

                Forms\Components\RichEditor::make('content')->required(),

                Forms\Components\TextInput::make('loc_link')
                    ->label('Google Maps Link')
                    ->url()
                    ->required(),

                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('lat')
                        ->label('Latitude')
                        ->numeric()
                        ->step(0.0000001)
                        ->live(),

                    Forms\Components\TextInput::make('lng')
                        ->label('Longitude')
                        ->numeric()
                        ->step(0.0000001)
                        ->live(),
                ])
                    ->columns(2),

                Forms\Components\Placeholder::make('map_preview')
                    ->label('Map Preview')
                    ->dehydrated(false)        // don't save this field
                    ->columnSpanFull()
                    ->content(function (Get $get) {
                        $lat = $get('lat');
                        $lng = $get('lng');

                        if (!filled($lat) || !filled($lng)) {
                            return new HtmlString('<div class="text-gray-500">Enter lat / lng to preview map.</div>');
                        }

                        // escape values first, then insert into the HTML
                        $lat = e($lat);
                        $lng = e($lng);

                        return new HtmlString(<<<HTML
                            <iframe
                                width="100%"
                                height="300"
                                frameborder="0"
                                style="border:0"
                                src="https://www.google.com/maps?q={$lat},{$lng}&z=14&output=embed"
                                allowfullscreen>
                            </iframe>
                        HTML);
                    })

            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('location')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('schedule_date')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('lat')
                    ->label('Map')
                    ->icon('heroicon-o-map-pin')
                    ->url(fn($record) => "https://www.google.com/maps?q={$record->lat},{$record->lng}", true)
                    ->openUrlInNewTab(),

                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}
