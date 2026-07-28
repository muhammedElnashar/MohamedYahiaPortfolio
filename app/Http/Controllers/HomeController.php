<?php

namespace App\Http\Controllers;

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
}
