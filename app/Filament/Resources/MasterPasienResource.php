<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasterPasienResource\Pages;
use App\Filament\Resources\MasterPasienResource\RelationManagers;
use App\Models\MasterPasien;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Livewire\Component;
use Filament\Widgets\StatsOverviewWidget\Card as StatsOverviewWidgetCard;

class MasterPasienResource extends Resource
{
    protected static ?string $model = MasterPasien::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Front Office';
    public static function form(Form $form): Form
    {
        return $form
        
        ->schema([
            
               Card::make()->schema([
                Toggle::make('Is_Active')->inline(false),
                Forms\Components\TextInput::make('no_mr')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('nama_pasien')
                ->required()
                ->visibleOn('create')
                ->maxLength(255),
            Forms\Components\TextInput::make('nama_pj')
                ->required()
                ->maxLength(255),
                DateTimePicker::make('tgl_lahir'),
            Forms\Components\TextInput::make('alamat')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('no_ktp')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('no_bpjs')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('no_hp')
                ->required()
                ->maxLength(255),
           Select::make('status')
                ->options([
                    "lajang"=>"Lajang",
                    'menikah'=>'Menikah',
                    'Duda' => 'Duda',
                    'janda' => 'Janda'
                ])
                ->searchable()
                ->required(),
            Select::make('agama')
                ->options([
                    'islam'=>'islam',
                    'budha'=>'budha',
                    'kristen'=>'kristen'
                ])
                ->searchable()
                ->required(),
            Select::make('kecamatan')
                ->options([
                    'cengkareng_barat'=>'cengkareng barat',
                    'cengkareng_timur'=>'cengkareng timur',
                    'kapuk'=>'Kapuk'
                ])
                ->searchable()
                ->required(),
            Select::make('kelurahan')
                ->options([
                    'cengkareng_barat'=>'cengkareng barat',
                    'cengkareng_timur'=>'cengkareng timur',
                    'kapuk'=>'Kapuk'
                ])
                ->searchable()
                ->required(),
            Select::make('kabupaten_kota')
                ->options([
                    'jakarta_barat'=>'Jakarta Barat',
                    
                ])
                ->label('Kabupaten / Kota')
                ->searchable()
                ->required(),
            Select::make('suku')
                ->options([
                    "sunda"=>"Sunda",
                    'jawa'=> 'Jawa',
                    'batak' => 'Batak',
                    'melayu' => 'Melayu'
                ])
                ->searchable()
                ->required()
                
               ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_mr'),
                Tables\Columns\TextColumn::make('nama_pasien'),
                Tables\Columns\TextColumn::make('no_bpjs'),
                Tables\Columns\TextColumn::make('no_hp'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('agama'),
               
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListMasterPasiens::route('/'),
            'create' => Pages\CreateMasterPasien::route('/create'),
            'edit' => Pages\EditMasterPasien::route('/{record}/edit'),
        ];
    }    
}
