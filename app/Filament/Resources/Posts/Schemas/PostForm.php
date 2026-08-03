<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Заголовок')
                    ->required(),
                Textarea::make('desc')
                    ->label('Описание')
                    ->required(),
                DateTimePicker::make('custom_created_at')
                    ->label('Дата создания'),
                SpatieMediaLibraryFileUpload::make('cover')
                    ->collection('cover')
                    ->disk('media')
                    ->label('Обложка'),
                Builder::make('content')
                    ->label('Содержание новости')
                    ->addActionLabel('Добавить блок')
                    ->blocks([
                        Block::make('text')
                            ->label('Текстовый блок')
                            ->schema([
                                RichEditor::make('content')
                                    ->label('')
                                    ->columnSpanFull()
                                    ->fileAttachmentsDirectory('attachments'),
                            ]),
                        Block::make('img')
                            ->label('Изображение')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('')
                                    ->image()
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
