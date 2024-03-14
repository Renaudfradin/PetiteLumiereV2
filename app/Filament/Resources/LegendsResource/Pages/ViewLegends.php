<?php

namespace App\Filament\Resources\LegendsResource\Pages;

use App\Filament\Resources\LegendsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLegends extends ViewRecord
{
    protected static string $resource = LegendsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
