<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en');
Route::get('/sitemap.xml', SitemapController::class)
    ->name('sitemap');

Route::get('/robots.txt', RobotsController::class)
    ->name('robots');
Route::prefix('{locale}')
    ->where(['locale' => 'ar|en'])
    ->middleware('frontend-locale')
    ->group(function () {


        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/services/{service:slug}', [ServiceController::class, 'show'])
            ->name('services.show');
        Route::get('/skills/{skill:slug}', [SkillController::class, 'show'])
            ->name('skills.show');
        Route::get('/platforms/{platform:slug}', [\App\Http\Controllers\PlatformController::class, 'show'])
            ->name('platforms.show');
        Route::get('/blog', [BlogController::class, 'index'])
            ->name('blogs.index');

        Route::get('/blog/{slug}', [BlogController::class, 'show'])
            ->name('blogs.show');

        Route::post('/contact', [ContactMessageController::class, 'store'])
            ->name('contact.store');
        Route::get('about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');

    });
Route::get('/language/{locale}', function ($locale) {

    abort_unless(
        in_array($locale, ['ar', 'en']),
        404
    );

    session([
        'locale' => $locale,
    ]);

    app()->setLocale($locale);

    return redirect()->back();

})->name('language.switch');
