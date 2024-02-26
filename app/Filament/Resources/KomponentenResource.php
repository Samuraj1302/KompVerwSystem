<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KomponentenResource\Pages;
use App\Filament\Resources\KomponentenResource\RelationManagers;
use App\Models\Komponenten;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class KomponentenResource extends Resource
{
    protected static ?string $model = Komponenten::class;

    protected static ?string $slug = 'Komponenten';

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $navigationLabel = 'Komponenten';

    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Typenbezeichnung')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('Zustand')
                    ->required()
                    ->options([
                        'in Ordnung' => 'in Ordnung',
                        'defekt' => 'defekt',
                    ]),
                Forms\Components\Select::make('kategoriens_id')
                    ->label('Kategorie')
                    ->relationship('kategoriens', 'kategorie')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('kategorie')
                            ->required()
                            ->maxLength(255),                       
                    ])
                    ,
                Forms\Components\Select::make('unterkategoriens_id')
                    ->label('Unterkategorie')
                    ->relationship('unterkategoriens', 'unterkategorie')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('unterkategorie')
                            ->required()
                            ->maxLength(255),
                    ])
                    ,
                Forms\Components\Select::make('lagerorts_id')
                    ->label('Lagerort')
                    ->relationship('lagerorts', 'lagerort')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('lagerort')
                            ->required()
                            ->maxLength(255),
                    ])
                    , 
                Forms\Components\Select::make('ausleihhistories_id')
                    ->relationship('ausleihhistories', 'ausleihstatus')
                        ->label('Ausleihstatus')
                        ->searchable()
                        ->preload(),             
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('typenbezeichnung')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategoriens.kategorie')
                    ->label('Kategorie')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('unterkategoriens.unterkategorie')
                    ->label('Unterkategorie')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lagerorts.lagerort')
                    ->label('Lagerort')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('zustand')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ausleihhistories.ausleihstatus')
                    ->label('Ausleihstatus')
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('zustand')
                    ->options([
                        'in Ordnung' => 'in Ordnung',
                        'defekt' => 'defekt',
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
            'index' => Pages\ListKomponentens::route('/'),
            'create' => Pages\CreateKomponenten::route('/create'),
            'edit' => Pages\EditKomponenten::route('/{record}/edit'),
        ];
    }
}
