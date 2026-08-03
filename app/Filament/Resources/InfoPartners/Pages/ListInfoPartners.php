<?php

namespace App\Filament\Resources\InfoPartners\Pages;

use App\Filament\Resources\InfoPartners\InfoPartnerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInfoPartners extends ListRecords
{
    protected static string $resource = InfoPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
