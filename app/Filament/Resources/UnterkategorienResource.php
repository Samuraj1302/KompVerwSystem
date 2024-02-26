<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UnterkategorienResource\Pages;
use App\Filament\Resources\UnterkategorienResource\RelationManagers;
use App\Models\Unterkategorien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UnterkategorienResource extends Resource
{
    protected static ?string $model = Unterkategorien::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $navigationLabel = 'Unterkategorien';

    protected static ?string $slug = 'Unterkategorien';


    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Unterkategorie')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('unterkategorie')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListUnterkategoriens::route('/'),
            'create' => Pages\CreateUnterkategorien::route('/create'),
            'edit' => Pages\EditUnterkategorien::route('/{record}/edit'),
        ];
    }
}
