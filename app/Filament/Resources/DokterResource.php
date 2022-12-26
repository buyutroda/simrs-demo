<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokterResource\Pages;
use App\Filament\Resources\DokterResource\RelationManagers;
use App\Models\Dokter;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokterResource extends Resource
{
    protected static ?string $model = Dokter::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Management Master';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_dokter')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sip')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('str')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('exp_sip')
                    ->required(),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_hp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_spesialis')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tgl_praktek')
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_dokter'),
                Tables\Columns\TextColumn::make('sip'),
                Tables\Columns\TextColumn::make('str'),
                Tables\Columns\TextColumn::make('exp_sip')
                    ->date(),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('no_hp'),
                Tables\Columns\TextColumn::make('id_spesialis'),
                Tables\Columns\TextColumn::make('tgl_praktek')
                    ->date(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageDokters::route('/'),
        ];
    }    
}
