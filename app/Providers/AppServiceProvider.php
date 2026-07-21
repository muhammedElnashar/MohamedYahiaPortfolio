<?php

namespace App\Providers;

use App\Models\SeoData;
use App\Services\SiteSettings;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {

            $seo = SeoData::where(
                'slug',
                Route::currentRouteName()
            )->first();

            $view->with('seo', $seo);

        });
        app()->setLocale(
            session('locale', SiteSettings::defaultLocale())
        );

    }
}
