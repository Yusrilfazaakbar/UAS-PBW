<?php

namespace App\Filament\Resources\FireAreaResource\Pages;

use App\Filament\Resources\FireAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFireAreas extends ListRecords
{
    protected static string $resource = FireAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
