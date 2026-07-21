<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function show(string $locale, Skill $skill)
    {
        $skill->load([
            'features',
            'metrics',
            'tools'
        ]);

        return view('pages.skills.show', compact('skill'));
    }
}
