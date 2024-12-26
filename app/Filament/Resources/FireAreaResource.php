<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FireAreaResource\Pages;
use App\Models\FireArea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FireAreaResource extends Resource
{
    protected static ?string $model = FireArea::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nama Lokasi'),
                
                Textarea::make('description')
                    ->required()
                    ->label('Deskripsi'),
                
                TextInput::make('risk_level')
                    ->numeric() // Pastikan input berupa angka
                    ->minValue(1) // Batas minimum
                    ->maxValue(10) // Batas maksimum
                    ->required()
                    ->label('Tingkat Risiko'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama Lokasi'),
                TextColumn::make('description')->label('Deskripsi'),
                TextColumn::make('risk_level')->label('Tingkat Risiko'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFireAreas::route('index'),
            'create' => Pages\CreateFireArea::route('/create'),
            'edit' => Pages\EditFireArea::route('/{record}/edit'),
        ];
    }
}
