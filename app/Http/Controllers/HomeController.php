<?php

namespace App\Http\Controllers;

use App\Models\ProfilePage;
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
        $profilePage->
        load([
            'stats',
            'careerItems',
            'educationItems',
            'methodologyItems',

        ])->get();
        return view('pages.about', compact('profilePage'));
    }
}
