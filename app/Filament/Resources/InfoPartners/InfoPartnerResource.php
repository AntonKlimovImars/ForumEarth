<?php

namespace App\Filament\Resources\InfoPartners;

use App\Filament\Resources\InfoPartners\Pages\CreateInfoPartner;
use App\Filament\Resources\InfoPartners\Pages\EditInfoPartner;
use App\Filament\Resources\InfoPartners\Pages\ListInfoPartners;
use App\Filament\Resources\InfoPartners\Schemas\InfoPartnerForm;
use App\Filament\Resources\InfoPartners\Tables\InfoPartnersTable;
use App\Models\InfoPartner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InfoPartnerResource extends Resource
{
    protected static ?string $model = InfoPartner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Информационные партнеры';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return InfoPartnerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InfoPartnersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInfoPartners::route('/'),
            'create' => CreateInfoPartner::route('/create'),
            'edit' => EditInfoPartner::route('/{record}/edit'),
        ];
    }
}
