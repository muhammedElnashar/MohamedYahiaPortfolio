<?php

namespace App\Support\Translation;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;

class Translation
{
    public static function text(
        string $field,
        string $label,
        bool $required = false,
        bool $disableEnglish = false
    ): Grid {
        return Grid::make(2)
            ->schema([

                TextInput::make("$field.en")
                    ->label("English {$label}")
                    ->required($required)
                    ->disabled($disableEnglish),

                TextInput::make("$field.ar")
                    ->label("Arabic {$label}")
                    ->required($required),

            ]);
    }

    public static function textarea(
        string $field,
        string $label,
        int $rows = 4,
        bool $required = false,
        bool $disableEnglish = false
    ): Grid {
        return Grid::make(2)
            ->schema([

                Textarea::make("$field.en")
                    ->label("English {$label}")
                    ->rows($rows)
                    ->required($required)
                    ->disabled($disableEnglish),

                Textarea::make("$field.ar")
                    ->label("Arabic {$label}")
                    ->rows($rows)
                    ->required($required),

            ]);
    }

    public static function richEditor(
        string $field,
        string $label,
        bool $required = false,
    ): Grid {
        return Grid::make(2)
            ->schema([
                RichEditor::make("$field.en")
                    ->label("English {$label}")
                    ->required($required)
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote',
                        'undo',
                        'redo',
                    ]),

                RichEditor::make("$field.ar")
                    ->label("Arabic {$label}")
                    ->required($required)
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote',
                        'undo',
                        'redo',
                    ]),
            ]);
    }
}
