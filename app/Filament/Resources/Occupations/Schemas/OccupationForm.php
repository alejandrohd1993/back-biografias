<?php

namespace App\Filament\Resources\Occupations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OccupationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre de la ocupación')
                    ->required(),
                Textarea::make('description')
                    ->label('Descripción de la ocupación')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
