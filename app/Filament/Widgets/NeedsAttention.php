<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Blogs\BlogResource;
use App\Filament\Resources\Services\ServiceResource;
use App\Filament\Resources\SeoSpecialties\SeoSpecialtyResource;
use App\Filament\Resources\Skills\SkillResource;
use App\Services\ContentHealthService;
use Filament\Widgets\Widget;
use Illuminate\Support\Collection;

class NeedsAttention extends Widget
{
    protected string $view = 'filament.widgets.needs-attention';

    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = [
        'default' => 'full',
        'xl' => 1,
    ];

    public function getIssues(): Collection
    {
        return app(ContentHealthService::class)
            ->issues()
            ->take(5);
    }

    public function getTotalAffected(): int
    {
        return app(ContentHealthService::class)
            ->issues()
            ->count();
    }

    public function getEditUrl(array $item): ?string
    {
        return match ($item['type']) {

            'Blog' => BlogResource::getUrl('edit', [
                'record' => $item['id'],
            ]),

            'Service' => ServiceResource::getUrl('edit', [
                'record' => $item['slug'],
            ]),

            'Platform' => SeoSpecialtyResource::getUrl('edit', [
                'record' => $item['id'],
            ]),

            'Skill' => SkillResource::getUrl('edit', [
                'record' => $item['id'],
            ]),


            default => null,
        };
    }
}
