<?php

namespace App\Filament\Resources\UnterkategorienResource\Pages;

use App\Filament\Resources\UnterkategorienResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnterkategoriens extends ListRecords
{
    protected static string $resource = UnterkategorienResource::class;

    protected static ?string $title = "Unterkategorien";

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
