<?php

namespace App\Support\Filament;

use Closure;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Model;

class SortOrder
{
    /**
     * Global model ordering.
     *
     * Example:
     * SortOrder::make(Skill::class)
     */
    public static function make(
        string $model,
        string $field = 'sort_order'
    ): TextInput {

        return TextInput::make($field)
            ->label('Sort Order')
            ->numeric()
            ->integer()
            ->minValue(1)
            ->required()
            ->default(
                fn () =>
                    ($model::query()->max($field) ?? 0) + 1
            ) ->disabled()
            ->dehydrated();
    }


    /**
     * Ordering inside a relationship.
     *
     * Example:
     * SortOrder::relationship(
     *     fn () => $this->getOwnerRecord()->faqs()
     * )
     */
    public static function relationship(
        Closure $relationship,
        string $field = 'sort_order'
    ): TextInput {

        return TextInput::make($field)
            ->label('Sort Order')
            ->numeric()
            ->integer()
            ->minValue(1)
            ->required()
            ->default(
                fn () =>
                    ($relationship()->max($field) ?? 0) + 1
            )  ->disabled()
            ->dehydrated();
    }
}
