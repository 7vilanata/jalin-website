<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocmedResource\Pages;
use App\Filament\Resources\SocmedResource\RelationManagers;
use App\Models\SocialMedia;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocmedResource extends Resource
{
    protected static ?string $model = SocialMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish Socmed')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Select::make('socmed_type')
                    ->label('Type Social Media')
                    ->options([
                        'Tiktok' => 'Tiktok',
                        'Instagram' => 'Instagram',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('publish_date')
                    ->default(now())
                    ->timezone('Asia/Jakarta')
                    ->required()
                    ->label('Publish Date'),


                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->disk('public')
                    ->directory('socmed')
                    ->columnSpanFull()
                    ->visibility('public')
                    ->preserveFilenames()
                    ->label('Thumbnail')
                    ->required(),
                Forms\Components\TextInput::make('socmed_link')
                    ->label('Link Socmed')
                    ->url()
                    ->required(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('socmed_type')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('socmed_link')
                    ->label('Link')
                    ->icon('heroicon-o-link')
                    ->url(fn($record) => "{$record->socmed_link}", true)
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('publish_date')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
            ])
            ->filters([
                SelectFilter::make('socmed_type')
                    ->options([
                        'Tiktok' => 'Tiktok',
                        'Instagram' => 'Instagram',
                    ])
                    ->label('Type Socmed'),
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
            'index' => Pages\ListSocmeds::route('/'),
            'create' => Pages\CreateSocmed::route('/create'),
            'edit' => Pages\EditSocmed::route('/{record}/edit'),
        ];
    }
}
