<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->email(),
                Select::make('role')->options([
                    'admin' => 'Admin',
                    'doctor' => 'Doctor',
                    'staff' => 'Staff',
                    'patient' => 'Patient'
                ])->required(),
                TextInput::make('password')->password()->visibleOn('create')
                // ->dehydrated(fn ($state) => filled($state)) this is for filled password
            ]);
    }
}
