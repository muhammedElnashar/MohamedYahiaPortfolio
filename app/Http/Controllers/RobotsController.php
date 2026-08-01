<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class RobotsController extends Controller
{
    public function __invoke(): Response
    {


        $content = implode(PHP_EOL, [

            'User-agent: *',

            'Allow: /',

            'Disallow: /admin',
            'Disallow: /login',
            'Disallow: /register',
            'Disallow: /dashboard',

            '',

            'Sitemap: ' . route('sitemap'),

        ]);

        return response($content)
            ->header('Content-Type', 'text/plain');
    }
}
