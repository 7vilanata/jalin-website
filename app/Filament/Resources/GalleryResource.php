<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationLabel = 'Galleries';
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Content';

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
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->afterStateUpdated(function ($state, callable $set) {
                            $set('slug', Str::slug($state));
                        }),

                    Forms\Components\DatePicker::make('image_date')
                        ->default(now())
                        ->timezone('Asia/Jakarta')
                        ->required()
                        ->label('Date'),
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
                Forms\Components\RichEditor::make('content')->required(),

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
                Tables\Columns\TextColumn::make('image_date')->sortable()->searchable(),

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
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
