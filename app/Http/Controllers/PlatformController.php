<?php

namespace App\Http\Controllers;

use App\Models\SeoSpecialty;
use App\Services\SchemaService;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function show(string $locale, SeoSpecialty $platform, SchemaService $schemaService)
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
        $schemas = $schemaService->platform(
            $platform
        );
        seo()->set($platform->seo);
        return view('pages.platform.show', compact('platform','schemas'));
    }
}
