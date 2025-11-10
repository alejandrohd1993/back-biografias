<?php

namespace App\Filament\Resources\Occupations;

use App\Filament\Resources\Occupations\Pages\CreateOccupation;
use App\Filament\Resources\Occupations\Pages\EditOccupation;
use App\Filament\Resources\Occupations\Pages\ListOccupations;
use App\Filament\Resources\Occupations\Schemas\OccupationForm;
use App\Filament\Resources\Occupations\Tables\OccupationsTable;
use App\Models\Occupation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OccupationResource extends Resource
{
    protected static ?string $model = Occupation::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Ocupaciones';

    protected static ?string $pluralModelLabel = 'Ocupaciones';

    protected static ?string $singularModelLabel = 'Ocupación';


    public static function form(Schema $schema): Schema
    {
        return OccupationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OccupationsTable::configure($table);
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
            'index' => ListOccupations::route('/'),
            'create' => CreateOccupation::route('/create'),
            'edit' => EditOccupation::route('/{record}/edit'),
        ];
    }
}
