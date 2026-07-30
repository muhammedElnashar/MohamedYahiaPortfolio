<?php

namespace App\Filament\Resources\Blogs\Schemas;

use App\Support\Translation\Translation;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Basic Information')
                    ->schema([

                        TextInput::make('title.ar')
                            ->label('Title Arabic')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('title.en')
                            ->label('Title English')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(
                                fn ($state, $set) =>
                                $set('slug', Str::slug($state))
                            ),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Select::make('blog_category_id')
                            ->label('Category')
                            ->relationship(
                                name: 'category',
                                titleAttribute: 'name'
                            )
                            ->searchable()
                            ->preload()
                            ->required(),
                        Translation::textarea('excerpt','Excerpt')->columnSpanFull(),



                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Tags')
                    ->schema([

                        Select::make('tags')
                            ->label('Tags')
                            ->relationship(
                                name: 'tags',
                                titleAttribute: 'name'
                            )
                            ->multiple()
                            ->searchable()
                            ->preload()
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),

                Section::make('Article Content')
                    ->schema([
                        Translation::richEditor('content','Content')->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                Section::make('Media')
                    ->schema([

                        FileUpload::make('featured_image')
                            ->label('Featured Image')
                            ->image()
                            ->disk('public')
                            ->directory('blogs')
                            ->visibility('public')
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull(),

                Section::make('Publishing')
                    ->schema([

                        TextInput::make('author_name')
                            ->label('Author')
                            ->maxLength(255),

                        TextInput::make('reading_time')
                            ->label('Reading Time')
                            ->numeric()
                            ->minValue(1)
                            ->suffix('minutes'),

                        DateTimePicker::make('published_at')
                            ->label('Published At')
                            ->seconds(false),

                        Toggle::make('is_featured')
                            ->label('Featured')
                            ->default(false),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


                Section::make('SEO')
                    ->schema([
                        Translation::text('meta_title', 'Meta Title',required: true)->columnSpanFull(),
                        Translation::textarea('meta_description', 'Meta Description',required: true)->columnSpanFull(),
                        TextInput::make('canonical_url')->url()->required(),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),


            ]);
    }
}
