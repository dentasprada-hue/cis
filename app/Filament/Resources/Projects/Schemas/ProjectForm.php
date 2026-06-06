<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Section::make('Project Information')
                    ->description('Provide the core details of the project.')
                    ->schema([
                        \Filament\Forms\Components\Grid::make(2)->schema([
                            TextInput::make('title')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (string $operation, $state, $set) => 
                                    $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null
                                ),
                            TextInput::make('slug')
                                ->required()
                                ->unique(ignoreRecord: true),
                        ]),
                        
                        Textarea::make('short_description')
                            ->rows(3)
                            ->columnSpanFull()
                            ->maxLength(255)
                            ->helperText('A brief summary used on listing pages.'),
                            
                        \Filament\Forms\Components\RichEditor::make('description')
                            ->columnSpanFull()
                            ->helperText('Detailed case study and architectural descriptions.'),
                    ]),

                \Filament\Forms\Components\Section::make('Project Specifications & Attributes')
                    ->description('Key attributes representing scale, location, and categorization.')
                    ->schema([
                        \Filament\Forms\Components\Grid::make(2)->schema([
                            \Filament\Forms\Components\Select::make('category')
                                ->options([
                                    'Residential' => 'Residential',
                                    'Commercial' => 'Commercial',
                                    'Office' => 'Office',
                                    'Hospitality' => 'Hospitality',
                                ])
                                ->required()
                                ->native(false),
                            TextInput::make('location')
                                ->placeholder('e.g. Jakarta Selatan')
                                ->required(),
                            TextInput::make('year')
                                ->numeric()
                                ->placeholder('e.g. 2024')
                                ->required(),
                            TextInput::make('scale')
                                ->placeholder('e.g. 1,200 sqm')
                                ->required(),
                        ]),
                        Toggle::make('is_featured')
                            ->label('Featured Project')
                            ->helperText('Toggle to highlight on the Home page and main display.')
                            ->default(false),
                    ]),

                \Filament\Forms\Components\Section::make('Project Media')
                    ->description('Upload high-quality interior images.')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Cover / Featured Image')
                            ->image()
                            ->directory('projects/featured')
                            ->imageEditor()
                            ->required(),
                        FileUpload::make('gallery_images')
                            ->label('Gallery Images')
                            ->image()
                            ->multiple()
                            ->reorderable()
                            ->directory('projects/gallery')
                            ->imageEditor()
                            ->nullable(),
                    ]),

                \Filament\Forms\Components\Section::make('SEO Settings')
                    ->description('Optimize search engine visibility.')
                    ->schema([
                        TextInput::make('seo_title')
                            ->maxLength(60)
                            ->placeholder('Defaults to Title if blank')
                            ->helperText('Google recommends keeping under 60 characters.'),
                        Textarea::make('seo_description')
                            ->maxLength(160)
                            ->placeholder('Defaults to Short Description if blank')
                            ->helperText('Google recommends keeping under 160 characters.')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
