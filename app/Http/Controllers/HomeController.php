<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use App\Models\HeroSection;
use App\Models\HeroSkill;
use App\Models\HomeFactItem;
use App\Models\HomeSection;
use App\Models\Platform;
use App\Models\SeoTools;
use App\Models\ServiceCategory;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = HeroSection::first();
        $facts = HomeFactItem::all();
        $hero_skills = HeroSkill::orderBy('sort_order')->get();
        $sections = HomeSection::all()->keyBy('section_key');
        $categories = ServiceCategory::with([
            'services' => fn($q) => $q
                ->orderBy('sort_order')
        ])
            ->whereHas('services', fn($q) => $q->where('is_active', true))
            ->orderBy('sort_order')
            ->get();
        $caseStudies = CaseStudy::query()
            ->with([
                'growths' => fn($q) => $q->orderBy('sort_order'),
                'improvements' => fn($q) => $q->orderBy('sort_order'),
            ])
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();
        $skills = Skill::query()
            ->with([
                'metrics' => fn($q) => $q->orderBy('sort_order'),
                'features' => fn($q) => $q->orderBy('sort_order'),
                'tools' => fn($q) => $q->orderBy('sort_order'),
            ])
            ->orderBy('sort_order')
            ->get();
        $seoTools = SeoTools::all();
        $platforms = Platform::all();

        return view('pages.home', compact('hero','platforms','seoTools', 'hero_skills', 'skills', 'facts', 'categories', 'sections', 'caseStudies', 'skills'));
    }
}
