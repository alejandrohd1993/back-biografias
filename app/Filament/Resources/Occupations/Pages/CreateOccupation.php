<?php

namespace App\Filament\Resources\Occupations\Pages;

use App\Filament\Resources\Occupations\OccupationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOccupation extends CreateRecord
{
    protected static string $resource = OccupationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
