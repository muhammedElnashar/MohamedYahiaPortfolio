<?php

namespace App\Http\Controllers;

use App\Models\SeoSpecialty;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function show(string $locale, SeoSpecialty $platform)
    {
        $platform->load([
           'advantages',
           'challenges',
           'comparisons',
           'faqs',
           'heroStats',
           'methodologies',
           'processes',
           'services',
           'statistics',
        ]);
        return view('pages.platform.show', compact('platform'));
    }
}
