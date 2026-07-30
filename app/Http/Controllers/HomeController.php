<?php

namespace App\Http\Controllers;

use App\Models\HeroSkill;
use App\Models\ProfilePage;
use App\Models\Skill;
use App\Services\HomePageService;

class HomeController extends Controller
{
    public function __construct(
        private readonly HomePageService $homePageService
    ) {}

    public function index()
    {

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
        return view('pages.about', compact('profilePage','skills'));
    }
}
