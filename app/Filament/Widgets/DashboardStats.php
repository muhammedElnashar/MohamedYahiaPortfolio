<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\ContactMessage;
use App\Models\SeoSpecialty;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        /*
        |--------------------------------------------------------------------------
        | Counts
        |--------------------------------------------------------------------------
        */

        $blogsCount = Blog::count();

        $activeBlogs = Blog::query()
            ->where('is_active', true)
            ->count();


        $servicesCount = Service::count();

        $activeServices = Service::query()
            ->where('is_active', true)
            ->count();


        $platformsCount = SeoSpecialty::count();

        $activePlatforms = SeoSpecialty::query()
            ->where('is_active', true)
            ->count();


        $messagesCount = ContactMessage::count();


        /*
        |--------------------------------------------------------------------------
        | Charts - Last 7 Days
        |--------------------------------------------------------------------------
        */

        $blogChart = $this->getLastSevenDaysData(Blog::class);

        $serviceChart = $this->getLastSevenDaysData(Service::class);

        $platformChart = $this->getLastSevenDaysData(SeoSpecialty::class);

        $messageChart = $this->getLastSevenDaysData(ContactMessage::class);


        /*
        |--------------------------------------------------------------------------
        | Stats
        |--------------------------------------------------------------------------
        */

        return [

            Stat::make('Blogs', number_format($blogsCount))
                ->description("{$activeBlogs} active articles")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->icon('heroicon-o-document-text')
                ->color('success')
                ->chart($blogChart),


            Stat::make('Services', number_format($servicesCount))
                ->description("{$activeServices} active services")
                ->descriptionIcon('heroicon-m-check-circle')
                ->icon('heroicon-o-briefcase')
                ->color('info')
                ->chart($serviceChart),


            Stat::make('Platforms', number_format($platformsCount))
                ->description("{$activePlatforms} active platforms")
                ->descriptionIcon('heroicon-m-check-badge')
                ->icon('heroicon-o-squares-2x2')
                ->color('warning')
                ->chart($platformChart),


            Stat::make('Messages', number_format($messagesCount))
                ->description('Client messages')
                ->descriptionIcon('heroicon-m-envelope')
                ->icon('heroicon-o-chat-bubble-left-right')
                ->color('danger')
                ->chart($messageChart),

        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Last 7 Days
    |--------------------------------------------------------------------------
    */

    private function getLastSevenDaysData(string $model): array
    {
        return collect(range(6, 0))
            ->map(function (int $daysAgo) use ($model) {

                $date = now()->subDays($daysAgo);

                return $model::query()
                    ->whereDate('created_at', $date)
                    ->count();

            })
            ->toArray();
    }


    /*
    |--------------------------------------------------------------------------
    | Columns
    |--------------------------------------------------------------------------
    */

    protected function getColumns(): int
    {
        return 4;
    }
}
