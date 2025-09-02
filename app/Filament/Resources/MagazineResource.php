<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MagazineResource\Pages;
use App\Filament\Resources\MagazineResource\RelationManagers;
use App\Models\Magazine;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MagazineResource extends Resource
{
    protected static ?string $model = Magazine::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Magazines';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish Magazine')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull()
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

                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('download_link')->required(),
                    Forms\Components\DatePicker::make('publish_date')
                        ->default(now())
                        ->required()
                        ->label('Publish Date'),
                ])
                    ->columns(2),
                Forms\Components\TextInput::make('title')->required(),

            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('download_link')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('publish_date')->sortable()->searchable(),

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
            'index' => Pages\ListMagazines::route('/'),
            'create' => Pages\CreateMagazine::route('/create'),
            'edit' => Pages\EditMagazine::route('/{record}/edit'),
        ];
    }
}
