<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplierResource\Pages;
use App\Models\Supplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// Form Components
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

// Table Components
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BadgeColumn;

class SupplierResource extends Resource
{
    protected static ?string $model = Supplier::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Supplier')
                    ->required(),

                Textarea::make('alamat')
                    ->label('Alamat')
                    ->required(),

                TextInput::make('no_handphone')
                    ->label('No Handphone')
                    ->numeric()
                    ->required(),

                Select::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'Food & Beverage' => 'Food & Beverage',
                        'Household' => 'Household',
                        'Personal Care' => 'Personal Care',
                        'Frozen Food' => 'Frozen Food',
                        'General Merchandise' => 'General Merchandise',
                    ])
                    ->required(),

                DatePicker::make('tanggal_beli')
                    ->label('Tanggal Beli')
                    ->required(),

                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('supplier-images')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable(),

                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->limit(30),

                TextColumn::make('no_handphone')
                    ->label('No HP'),

                BadgeColumn::make('kategori')
                    ->label('Kategori')
                    ->colors([
                        'Food & Beverage' => 'success',
                        'Household' => 'primary',
                        'Personal Care' => 'warning',
                        'Frozen Food' => 'info',
                        'General Merchandise' => 'gray',
                    ]),

                TextColumn::make('tanggal_beli')
                    ->label('Tanggal Beli')
                    ->date(),

                ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->size(50),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSuppliers::route('/'),
            'create' => Pages\CreateSupplier::route('/create'),
            'edit' => Pages\EditSupplier::route('/{record}/edit'),
        ];
    }
}