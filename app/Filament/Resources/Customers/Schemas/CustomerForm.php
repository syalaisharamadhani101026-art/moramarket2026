<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_customer')
                    ->required(),
                TextInput::make('nama_customer')
                    ->required(),
                TextInput::make('no_hp')
                    ->required(),
                DatePicker::make('tanggal_daftar')
                    ->required(),
                FileUpload::make('foto_kartu')
                ->image()
                ->directory('foto_kartu')
                ->disk('public')
                ->imagePreviewHeight('150')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                ->maxSize(2048)
                ->required(),
            ]);
    }
}
