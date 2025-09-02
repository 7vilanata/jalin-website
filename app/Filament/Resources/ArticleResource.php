<?php

// app/Filament/Resources/ArticleResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;
    protected static ?string $navigationLabel = 'Articles';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\Toggle::make('is_published')
                ->label('Publish Article')
                ->onColor('success')
                ->offColor('danger')
                ->default(true)
                ->columnSpanFull()
                ->required(),
            Forms\Components\Select::make('campaign_type')
                ->options([
                    'Warkop RAWVolution' => 'Warkop RAWVolution',
                    'Youth RAWLeague' => 'Youth RAWLeague',
                    'Youth RAWFest' => 'Youth RAWFest',
                    'Others' => 'Others',
                ])
                ->label('Campaign Type')
                ->default('Warkop RAWVolution')
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
                Forms\Components\TextInput::make('slug')->required(),
                Forms\Components\DatePicker::make('publish_date')
                    ->default(now())
                    ->timezone('Asia/Jakarta')
                    ->required()
                    ->label('Publish Date'),
            ])
                ->columns(2),
            Forms\Components\Group::make([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('meta_title'),
            ])
                ->columns(2),
            Forms\Components\Group::make([
                Forms\Components\TextInput::make('meta_description'),
                Forms\Components\TextInput::make('meta_keywords'),
            ])
                ->columns(2),

            Forms\Components\RichEditor::make('content')->required(),

        ])
            ->columns(1);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
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
            ]);;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
