<?php

namespace App\Filament\Resources\FireAreaResource\Pages;

use App\Filament\Resources\FireAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFireArea extends EditRecord
{
    protected static string $resource = FireAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
