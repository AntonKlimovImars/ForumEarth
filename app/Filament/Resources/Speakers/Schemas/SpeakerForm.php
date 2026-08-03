<?php

namespace App\Filament\Resources\Speakers\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Имя')
                    ->required(),
                Select::make('type')
                    ->label('Тип')
                    ->options([
                        'спикер' => 'Спикер',
                        'эксперт' => 'Эксперт',
                    ])
                    ->default('спикер')
                    ->required(),
                Textarea::make('description')
                    ->label('Описание'),
                SpatieMediaLibraryFileUpload::make('media')
                    ->collection('image')
                    ->disk('media')
                    ->image(),
            ]);
    }
}
