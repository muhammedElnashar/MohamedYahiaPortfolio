<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Services\SchemaService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(string $locale, Service $service,  SchemaService $schemaService)
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
        $schemas = $schemaService->service(
            $service
        );
        return view('pages.services.show', compact('service','schemas'));
    }

}
