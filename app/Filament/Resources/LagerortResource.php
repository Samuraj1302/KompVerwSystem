<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LagerortResource\Pages;
use App\Filament\Resources\LagerortResource\RelationManagers;
use App\Models\Lagerort;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LagerortResource extends Resource
{
    protected static ?string $model = Lagerort::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Lagerort';

    protected static ?string $slug = 'Lagerort';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Lagerort')
                    ->required()
                    ->maxLength(255),                
                /*Forms\Components\TextInput::make('Raum')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Schrank')
                    ->required()
                    ->maxLength(255)
                    ->nullable(),*/
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lagerort')
                    ->searchable()
                    ->sortable(),
                /*Tables\Columns\TextColumn::make('raum')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('schrank')
                    ->searchable()
                    ->sortable(),*/
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
            'index' => Pages\ListLagerorts::route('/'),
            'create' => Pages\CreateLagerort::route('/create'),
            'edit' => Pages\EditLagerort::route('/{record}/edit'),
        ];
    }
}
