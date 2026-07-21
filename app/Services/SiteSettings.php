<?php

namespace App\Services;

class SiteSettings
{
    public static function defaultLocale(): string
    {
        return 'ar';
    }

    public static function availableLocales(): array
    {
        return ['ar', 'en'];
    }
}
