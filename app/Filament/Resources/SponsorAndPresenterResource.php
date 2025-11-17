<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SponsorAndPresenterResource\Pages;
use App\Filament\Resources\SponsorAndPresenterResource\RelationManagers;
use App\Models\SponsorAndPresenter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SponsorAndPresenterResource extends Resource
{
    protected static ?string $model = SponsorAndPresenter::class;
    protected static ?string $navigationGroup = 'Rawleague';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish Sponsors and Presenters')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(true)
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Group::make([
                    Forms\Components\TextInput::make('name')
                        ->label('Name')
                        ->required(),
                    Forms\Components\Select::make('role')
                        ->label('Role')
                        ->options([
                            'presenter' => 'Presenter',
                            'sponsor' => 'Sponsor',
                        ])
                        ->required(),
                ])
                    ->columns(2),
                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->disk('public')
                    ->directory('sponsors')
                    ->columnSpanFull()
                    ->visibility('public')
                    ->preserveFilenames()
                    ->label('Logo')
                    ->required(),


            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('logo')->label('Logo'),
                Tables\Columns\TextColumn::make('role')->label('Role'),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()  // This will automatically handle true/false values
                    ->label('Published') // Optional: Add a custom label for the column
                    ->trueIcon('heroicon-o-check-circle') // Icon for true value
                    ->falseIcon('heroicon-o-x-circle') // Icon for false value
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')->options([
                    'presenter' => 'Presenter',
                    'sponsor' => 'Sponsor',
                ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                 Action::make('duplicate')
                    ->label('Duplicate')  // Label for the action
                    ->icon('heroicon-o-document-duplicate')  // Icon for the action
                    ->action(function (SponsorAndPresenter $record) {
                        // Duplicate the record
                        $newRecord = $record->replicate();  // Duplicate the record
                        $newRecord->name = $record->name . ' (Copy)';
                        $newRecord->save();  // Save the duplicate as a new record
                    })
                    ->color('primary') // Optional, set the color of the button
                    ->requiresConfirmation()
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
            'index' => Pages\ListSponsorAndPresenters::route('/'),
            'create' => Pages\CreateSponsorAndPresenter::route('/create'),
            'edit' => Pages\EditSponsorAndPresenter::route('/{record}/edit'),
        ];
    }
}
