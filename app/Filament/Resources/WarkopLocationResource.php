<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WarkopLocationResource\Pages;
use App\Models\WarkopLocation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Get;
use Filament\Forms\Set;

class WarkopLocationResource extends Resource
{
    protected static ?string $model = WarkopLocation::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\Toggle::make('is_published')
                        ->label('Publish Warkop Location')
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
                    Forms\Components\TextInput::make('title')
                        ->required(),
                    Forms\Components\TextInput::make('loc_link')
                        ->label('Google Maps URL')
                        ->url()
                        ->required(),
                    Forms\Components\Hidden::make('location')
                        ->required(),

                    Forms\Components\TextInput::make('street_loc')
                        ->label('Street Location')
                        ->required(),


                ])
                    ->columns(1),

                Forms\Components\Placeholder::make('map_interface')
                    ->label('Location Map')
                    ->view('filament.components.location-resource')
                    ->dehydrated(false)
                    ->afterStateUpdated(function ($state, Set $set, Get $get) {
                        // This ensures the values are properly set in the form state
                        $location = $get('location'); // Get the selected location value
                        $set('location', $location);

                        $set('x', $get('x'));
                        $set('y', $get('y'));
                    })
                    ->extraAttributes(['wire:loading.remove' => true]),

                Forms\Components\Hidden::make('x')->default(0.0),
                Forms\Components\Hidden::make('y')->default(0.0),
            ])
            ->columns(2);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type_hub')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('street_loc')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('location')->sortable()->searchable(),
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
            'index' => Pages\ListWarkopLocations::route('/'),
            'create' => Pages\CreateWarkopLocation::route('/create'),
            'edit' => Pages\EditWarkopLocation::route('/{record}/edit'),
        ];
    }
}
