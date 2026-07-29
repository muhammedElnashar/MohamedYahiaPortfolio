<?php

namespace App\Filament\Widgets;

use App\Services\ContentHealthService;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContentHealth extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        $stats = app(ContentHealthService::class)
            ->stats();

        return [

            Stat::make(
                'SEO Issues',
                number_format($stats['seo'])
            )
                ->description(
                    $stats['seo'] === 0
                        ? 'SEO metadata complete'
                        : 'Missing SEO fields'
                )
                ->descriptionIcon(
                    $stats['seo'] === 0
                        ? 'heroicon-m-check-circle'
                        : 'heroicon-m-exclamation-triangle'
                )
                ->icon('heroicon-o-magnifying-glass')
                ->color(
                    $stats['seo'] === 0
                        ? 'success'
                        : 'danger'
                ),


            Stat::make(
                'Translation Issues',
                number_format($stats['translations'])
            )
                ->description(
                    $stats['translations'] === 0
                        ? 'Arabic & English complete'
                        : 'Missing translations'
                )
                ->descriptionIcon(
                    $stats['translations'] === 0
                        ? 'heroicon-m-check-circle'
                        : 'heroicon-m-language'
                )
                ->icon('heroicon-o-language')
                ->color(
                    $stats['translations'] === 0
                        ? 'success'
                        : 'warning'
                ),


            Stat::make(
                'Media Issues',
                number_format($stats['media'])
            )
                ->description(
                    $stats['media'] === 0
                        ? 'Media complete'
                        : 'Missing media'
                )
                ->descriptionIcon(
                    $stats['media'] === 0
                        ? 'heroicon-m-check-circle'
                        : 'heroicon-m-photo'
                )
                ->icon('heroicon-o-photo')
                ->color(
                    $stats['media'] === 0
                        ? 'success'
                        : 'warning'
                ),


            Stat::make(
                'Needs Attention',
                number_format($stats['affected_records'])
            )
                ->description(
                    $stats['total'] === 0
                        ? 'Everything looks good'
                        : "{$stats['total']} total issues"
                )
                ->descriptionIcon(
                    $stats['total'] === 0
                        ? 'heroicon-m-check-circle'
                        : 'heroicon-m-exclamation-circle'
                )
                ->icon('heroicon-o-shield-exclamation')
                ->color(
                    $stats['total'] === 0
                        ? 'success'
                        : 'danger'
                ),

        ];
    }

    protected function getColumns(): int
    {
        return 4;
    }
}
