<?php

namespace App\Support\Translation;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
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
    ): Section {
        return Section::make($label)
            ->description('Manage the content in English and Arabic.')
            ->schema([

                Tabs::make("{$field}_languages")
                    ->tabs([

                        /*
                        |--------------------------------------------------------------------------
                        | English
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('English')
                            ->icon('heroicon-o-language')
                            ->schema([

                                self::editor(
                                    "{$field}.en",
                                    "English {$label}",
                                    $required,
                                    [
                                        '#111827' => 'Black',
                                        '#374151' => 'Gray',
                                        '#dc2626' => 'Red',
                                        '#ea580c' => 'Orange',
                                        '#ca8a04' => 'Yellow',
                                        '#16a34a' => 'Green',
                                        '#2563eb' => 'Blue',
                                        '#7c3aed' => 'Purple',
                                    ],
                                ),

                            ]),

                        /*
                        |--------------------------------------------------------------------------
                        | Arabic
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('Arabic')
                            ->icon('heroicon-o-language')
                            ->schema([

                                self::editor(
                                    "{$field}.ar",
                                    "Arabic {$label}",
                                    $required,
                                    [
                                        '#111827' => 'أسود',
                                        '#374151' => 'رمادي',
                                        '#dc2626' => 'أحمر',
                                        '#ea580c' => 'برتقالي',
                                        '#ca8a04' => 'أصفر',
                                        '#16a34a' => 'أخضر',
                                        '#2563eb' => 'أزرق',
                                        '#7c3aed' => 'بنفسجي',
                                    ],
                                ),

                            ]),

                    ])
                    ->columnSpanFull(),

            ])
            ->columnSpanFull();
    }
    private static function editor(
        string $field,
        string $label,
        bool $required,
        array $colors,
    ): RichEditor {
        return RichEditor::make($field)
            ->label($label)
            ->required($required)

            ->toolbarButtons([

                [
                    'undo',
                    'redo',
                ],

                [
                    'bold',
                    'italic',
                    'underline',
                    'strike',
                    'subscript',
                    'superscript',
                ],

                [
                    'h2',
                    'h3',
                    'h4',
                    'h5',
                    'h6',
                ],

                [
                    'bulletList',
                    'orderedList',
                    'blockquote',
                    'code',
                ],

                [
                    'link',
                    'textColor',
                    'highlight',
                    'attachFiles',
                ],

                [
                    'table',
                ],

            ])

            ->textColors($colors)

            ->resizableImages()

            ->fileAttachmentsDisk('public')
            ->fileAttachmentsDirectory('blog-content')
            ->fileAttachmentsVisibility('public')

            ->fileAttachmentsAcceptedFileTypes([
                'image/jpeg',
                'image/png',
                'image/webp',
            ])

            ->fileAttachmentsMaxSize(5120)

            ->columnSpanFull();
    }
}
