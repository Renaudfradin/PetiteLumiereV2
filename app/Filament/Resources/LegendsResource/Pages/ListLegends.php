<?php

namespace App\Filament\Resources\LegendsResource\Pages;

use App\Filament\Resources\LegendsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLegends extends ListRecords
{
    protected static string $resource = LegendsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
