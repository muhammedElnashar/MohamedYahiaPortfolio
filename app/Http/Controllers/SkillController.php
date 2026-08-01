<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Services\SchemaService;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function show(string $locale, Skill $skill,  SchemaService $schemaService)
    {
        abort_unless(
            $skill->has_page,
            404
        );
        $skill->load([
            'page',
            'features',
            'metrics',
            'tools'
        ]);
        $schemas = $schemaService->skill(
            $skill
        );
        seo()->set($skill->seo);
        return view('pages.skills.show', compact('skill', 'schemas'));
    }
}
