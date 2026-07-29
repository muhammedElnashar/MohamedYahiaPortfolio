<?php

namespace App\Filament\Resources\CertificateSections\RelationManagers;

use App\Support\Filament\SortOrder;
use App\Support\Translation\Translation;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HighlightRelationManager extends RelationManager
{
    protected static string $relationship = 'highlights';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('platform')
                    ->label('Platform')
                    ->options([
                        'UDEMY' => 'Udemy',
                        'META' => 'Meta',
                        'SEMRUSH' => 'Semrush',
                        'GOOGLE' => 'Google',
                        'LINKEDIN' => 'LinkedIn',
                        'COURSERA' => 'Coursera',
                        'HUBSPOT' => 'HubSpot',
                        'OTHER' => 'Other',
                    ])
                    ->searchable()->columnSpanFull(),
                Translation::text('title', 'Title',required: true)->columnSpanFull(),
                Translation::text('subtitle', 'Subtitle',required: true)->columnSpanFull(),

                SortOrder::relationship(
                    fn () => $this->getOwnerRecord()->highlights()
                ),


                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('platform')
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->columns([

                TextColumn::make('platform')
                    ->label('Platform')
                    ->badge()
                    ->searchable(),

                TextColumn::make('title')
                    ->label(' Title')
                    ->searchable(),


                TextColumn::make('subtitle')
                    ->label('Subtitle')
                    ->limit(40),

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
    }}
