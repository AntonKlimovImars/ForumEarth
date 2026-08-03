<?php

namespace App\Filament\Resources\InfoPartners\Pages;

use App\Filament\Resources\InfoPartners\InfoPartnerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInfoPartner extends EditRecord
{
    protected static string $resource = InfoPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
