<?php

namespace App\Filament\Resources\Biographies\Schemas;

use App\Models\Occupation;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BiographyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->label('Nombre completo')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Select::make('occupation_id')
                    ->label('Ocupación')
                    ->options(Occupation::query()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                DatePicker::make('birth_date')
                    ->label('Fecha de nacimiento')
                    ->nullable(),
                Textarea::make('biography')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Imagen principal')
                    ->image()
                    ->directory('biografias')
                    ->disk('public')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->imageEditor()
                    ->nullable(),
                Toggle::make('featured')
                    ->label('Destacado')
                    ->helperText('Marcar si esta biografía debe mostrarse como destacada')
                    ->inline(false),
            ]);
    }
}
