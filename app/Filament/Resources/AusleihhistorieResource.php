<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AusleihhistorieResource\Pages;
use App\Filament\Resources\AusleihhistorieResource\RelationManagers;
use App\Models\Ausleihhistorie;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use PhpParser\Node\Stmt\Label;
use Illuminate\Contracts\View\View;

class AusleihhistorieResource extends Resource
{
    protected static ?string $model = Ausleihhistorie::class;


    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $navigationLabel = 'Ausleihhistorie';

    protected static ?string $slug = 'Ausleihistorie';

    protected static ?string $title = 'Ausleihhistorie';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('benutzers_id')
                    ->Label('Benutzer')
                    ->relationship('benutzers', 'name')
                    ->preload()
                    ->required()
                    ->searchable(),
                Forms\Components\Select::make ('komponentens_id')
                    ->Label('Komponente')
                    ->relationship('komponentens', 'typenbezeichnung')
                    ->preload()
                    ->required()
                    ->searchable(),
                Forms\Components\DatePicker::make('Ausleihdatum')
                    ->required(),
                Forms\Components\DatePicker::make('Rückgabedatum')
                    ->required()
                    ->nullable(),
                Forms\Components\Select::make('Ausleihstatus')
                    ->required()
                    ->options([
                        'verfügbar' => 'verfügbar',
                        'ausgeliehen' => 'ausgeliehen',
                    ]),
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('benutzers.name')
                    ->label('Benutzer')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('komponentens.typenbezeichnung')
                    ->label('Komponente')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ausleihdatum')
                    ->searchable()  
                    ->sortable(),
                Tables\Columns\TextColumn::make('rückgabedatum')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ausleihstatus')
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('ausleihstatus')
                    ->options([
                        'verfügbar' => 'verfügbar',
                        'ausgeliehen' => 'ausgeliehen',
                        ]),

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
            'index' => Pages\ListAusleihhistories::route('/'),
            'create' => Pages\CreateAusleihhistorie::route('/create'),
            'edit' => Pages\EditAusleihhistorie::route('/{record}/edit'),
        ];
    }
}
