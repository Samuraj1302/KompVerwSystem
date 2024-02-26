<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BenutzerResource\Pages;
use App\Filament\Resources\BenutzerResource\RelationManagers;
use App\Models\Benutzer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Component;

class BenutzerResource extends Resource
{
    protected static ?string $model = Benutzer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Benutzer';

    protected static ?string $slug = 'Benutzer';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Vorname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Klasse')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Email')
                    ->label('E-Mail-Adresse')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('Kennwort')
                    ->password()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vorname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('klasse')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('E-Mail-Adresse'),
                Tables\Columns\TextColumn::make('kennwort'),
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
            'index' => Pages\ListBenutzers::route('/'),
            'create' => Pages\CreateBenutzer::route('/create'),
            'edit' => Pages\EditBenutzer::route('/{record}/edit'),
        ];
    }
}
