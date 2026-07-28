<?php

namespace App\Filament\Resources\CertificateSections\RelationManagers;

use App\Support\Translation\Translation;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CertificatesRelationManager extends RelationManager
{
    protected static string $relationship = 'certificates';

    protected static ?string $title = 'Certificates';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                FileUpload::make('image')
                    ->label('Certificate Image')
                    ->image()
                    ->directory('certificates')
                    ->disk('public')
                    ->required()->columnSpanFull(),

                    Translation::text('title', 'Title',required: true)->columnSpanFull(),

                TextInput::make('url')
                    ->label('Certificate URL')
                    ->url()
                    ->maxLength(2048),
                TextInput::make('sort_order')
                    ->label('Sort Order')
                    ->numeric()
                    ->default(0)
                    ->required(),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('image')

            ->columns([

                ImageColumn::make('image')
                    ->label('Certificate')
                    ->disk('public')
                    ->height(70),

                TextColumn::make('title')
                    ->label('English Title')
                    ->placeholder('—')
                    ->searchable(),


                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

            ])

            ->defaultSort('sort_order')

            ->headerActions([
                CreateAction::make(),
            ])

            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}
