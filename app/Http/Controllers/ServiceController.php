<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(string $locale, Service $service)
    {
        $service->load([
            'category',

            'sections.stats',
            'sections.cards',
            'sections.processSteps',

            'contentSections',
            'painPoints',
            'benefits',
            'deliverables',
            'comparisons',
            'checklists',
            'keywords',
            'faqs',
            'ctas',
            'relatedServices',
        ]);

        return view('pages.services.show', compact('service'));
    }

}
