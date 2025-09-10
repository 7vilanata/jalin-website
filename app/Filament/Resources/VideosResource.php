<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideosResource\Pages;
use App\Filament\Resources\VideosResource\RelationManagers;
use App\Models\Videos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VideosResource extends Resource
{
    protected static ?string $model = Videos::class;
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish Video')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\DatePicker::make('publish_date')
                    ->default(now())
                    ->timezone('Asia/Jakarta')
                    ->required()
                    ->label('Publish Date'),

                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Forms\Components\TextInput::make('embed_link')
                    ->label('Link Embed Youtube')
                    ->url()
                    ->required()
                    ->placeholder('Example: https://www.youtube.com/embed/1YBa6c8WQ3o (Replace VIDEO_ID with your YouTube video ID)'),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),

                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
                Tables\Columns\TextColumn::make('publish_date')->sortable()->searchable(),
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
            'index' => Pages\ListVideos::route('/'),
            'create' => Pages\CreateVideos::route('/create'),
            'edit' => Pages\EditVideos::route('/{record}/edit'),
        ];
    }
}
