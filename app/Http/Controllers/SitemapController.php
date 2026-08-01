<?php

namespace App\Http\Controllers;

use App\Services\SitemapService;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(
        SitemapService $sitemapService
    ): Response {

        return response()

            ->view('seo.sitemap', [

                'urls' => $sitemapService->generate(),

            ])

            ->header(
                'Content-Type',
                'application/xml'
            );
    }
}
