<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeCarouselResource\Pages;
use App\Filament\Resources\HomeCarouselResource\RelationManagers;
use App\Models\HomeCarousel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeCarouselResource extends Resource
{
    protected static ?string $model = HomeCarousel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Homepage';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish Gallery Data')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull()
                    ->required(),

                Forms\Components\TextInput::make('big_title')
                    ->label('Title')
                    ->maxLength(255),

                Forms\Components\Select::make('type_event')
                    ->options([
                        'warkop' => 'Warkop',
                        'rawleague' => 'RAWLeague',
                        'rawfest' => 'RAWFest',
                    ])
                    ->label('Event Type')
                    ->required(),

                Forms\Components\TextInput::make('side_title')
                    ->label('Side Title (right)')
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image_path')
                    ->image()
                    ->disk('public')
                    ->directory('home_carousel')
                    ->columnSpanFull()
                    ->visibility('public')
                    ->preserveFilenames()
                    ->label('Image')
                    ->required(),



                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->label('Sort Order'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('big_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type_event')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('side_title')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()  // This will automatically handle true/false values
                    ->label('Published') // Optional: Add a custom label for the column
                    ->trueIcon('heroicon-o-check-circle') // Icon for true value
                    ->falseIcon('heroicon-o-x-circle') // Icon for false value
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListHomeCarousels::route('/'),
            'create' => Pages\CreateHomeCarousel::route('/create'),
            'edit' => Pages\EditHomeCarousel::route('/{record}/edit'),
        ];
    }
}
