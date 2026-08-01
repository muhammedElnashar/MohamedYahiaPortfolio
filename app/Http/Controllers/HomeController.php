<?php

namespace App\Http\Controllers;

use App\Enums\PageListEnum;
use App\Models\HeroSkill;
use App\Models\ProfilePage;
use App\Models\SeoDataPage;
use App\Models\Skill;
use App\Services\HomePageService;

class HomeController extends Controller
{
    public function __construct(
        private readonly HomePageService $homePageService
    ) {}

    public function index()
    {
        seo()->set(
            SeoDataPage::where('key', PageListEnum::HOME->value)->first()
        );

        return view(
            'pages.home',
            $this->homePageService->getData()

        );
    }

    public function about(ProfilePage $profilePage)
    {
        $profilePage= ProfilePage::
        with([
            'stats',
            'careerItems',
            'educationItems',
            'methodologyItems',
        ])->first();
        $skills = HeroSkill::all();
        seo()->set(
            SeoDataPage::where('key', PageListEnum::ABOUT->value)->first()
        );
        return view('pages.about', compact('profilePage','skills'));
    }
}
