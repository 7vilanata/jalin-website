<?php

namespace App\Filament\Resources\TeamsRelationManagerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamsRelationManager extends RelationManager
{
    protected static string $relationship = 'teams';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish teams')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull()
                    ->required(),


                Forms\Components\TextInput::make('name') // Team name input
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo_image')
                    ->label('Team Logo')
                    ->image()
                    ->disk('public')
                    ->directory('logo-team')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\TextInput::make('points') // Points in the tournament
                    ->required()
                    ->numeric()
                    ->default(0),

                Forms\Components\TextInput::make('position')
                    ->nullable()
                    ->numeric()
                    ->default(1),
                Forms\Components\Toggle::make('is_eliminated')
                    ->label('Eliminated')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull()
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Teams')
            ->columns([
                Tables\Columns\TextColumn::make('position') // Rank column
                    ->sortable(),
                Tables\Columns\TextColumn::make('name') // Team name column
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo_image')->disk('public'),
                Tables\Columns\TextColumn::make('position')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()  // This will automatically handle true/false values
                    ->label('Published') // Optional: Add a custom label for the column
                    ->trueIcon('heroicon-o-check-circle') // Icon for true value
                    ->falseIcon('heroicon-o-x-circle'),
                Tables\Columns\IconColumn::make('is_eliminated')
                    ->boolean()  // This will automatically handle true/false values
                    ->label('Still Playing') // Optional: Add a custom label for the column
                    ->trueIcon('heroicon-o-hand-thumb-down') // Icon for true value
                    ->falseIcon('heroicon-o-hand-thumb-up')
                    ->trueColor('text-red-500')  // Color for true value (e.g., red for "eliminated")
                    ->falseColor('text-green-500') // Icon for false value
                    ->tooltip(fn($record) => $record->is_eliminated ? 'Eliminated' : 'Still Playing')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
