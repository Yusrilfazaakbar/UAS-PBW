<?php

namespace App\Filament\Resources\FireAreaResource\Pages;

use App\Filament\Resources\FireAreaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFireArea extends CreateRecord
{
    protected static string $resource = FireAreaResource::class;

    protected function afterSave()
    {
        // Alihkan pengguna ke halaman fire-area.index setelah data disimpan
        // Menggunakan session untuk redirect
        $this->redirect(route('fire-area.index'));
    }
}


