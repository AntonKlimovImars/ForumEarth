<?php

namespace App\Filament\Resources\InfoPartners\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InfoPartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Название')
                    ->required(),
                TextInput::make('link')
                    ->label('Ссылка'),
                SpatieMediaLibraryFileUpload::make('media')
                    ->collection('image')
                    ->disk('media')
                    ->image()
                    ->label('Логотип'),
            ]);
    }
}
