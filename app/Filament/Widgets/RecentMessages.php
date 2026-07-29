<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class RecentMessages extends TableWidget
{
    protected static ?string $heading = 'Recent Messages';

    protected static ?int $sort = 4;

    protected int|string|array $columnSpan = [
        'default' => 'full',
        'xl' => 1,
    ];

    public function table(Table $table): Table
    {
        return $table

            ->query(
                ContactMessage::query()
                    ->latest('created_at')
            )

            ->columns([

                TextColumn::make('name')
                    ->label('Client')
                    ->searchable()
                    ->weight('medium')
                    ->limit(25),


                TextColumn::make('email')
                    ->label('Email')
                    ->limit(30)
                    ->toggleable(),


                TextColumn::make('created_at')
                    ->label('Received')
                    ->since()
                    ->sortable(),

            ])

            ->defaultSort(
                'created_at',
                'desc'
            )

            ->paginated([5]);
    }
}
