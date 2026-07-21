<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/ar');

Route::prefix('{locale}')
    ->where(['locale' => 'ar|en'])
    ->middleware('frontend-locale')
    ->group(function () {

        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/services/{service:slug}', [ServiceController::class, 'show'])
            ->name('services.show');
        Route::get('/skills/{skill:slug}', [SkillController::class, 'show'])
            ->name('skills.show');
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
