<?php

namespace App\Providers;

use App\Models\SeoData;
use App\Services\SiteSettings;
use App\Support\Seo\SeoManager;
use App\View\Composers\SchemaComposer;
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

        app()->setLocale(
            session('locale', SiteSettings::defaultLocale())
        );
        $this->app->singleton(SeoManager::class);
        View::composer('*', SchemaComposer::class);

    }
}
