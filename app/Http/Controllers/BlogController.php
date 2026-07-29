<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Services\BlogTableOfContents;
use App\Services\SchemaService;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * All Blogs
     */


    public function index(Request $request,  SchemaService $schemaService)
    {
        $categorySlug = $request->query('category');

        $blogs = Blog::query()
            ->with('category')
            ->where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->when($categorySlug, function ($query, $categorySlug) {

                $query->whereHas('category', function ($query) use ($categorySlug) {
                    $query->where('slug', $categorySlug)
                        ->where('is_active', true);
                });

            })
            ->latest('published_at')
            ->paginate(9)
            ->withQueryString();


        $categories = BlogCategory::query()
            ->where('is_active', true)
            ->withCount([
                'blogs' => function ($query) {

                    $query
                        ->where('is_active', true)
                        ->whereNotNull('published_at')
                        ->where('published_at', '<=', now());

                }
            ])
            ->orderBy('sort_order')
            ->get();

        /*
            |--------------------------------------------------------------------------
            | Schema
            |--------------------------------------------------------------------------
            */

        $schemas = $schemaService->blogIndex(
            $blogs->getCollection()
        );

        return view('pages.blogs.index', compact(
            'blogs',
            'categories',
            'categorySlug',
            'schemas'
        ));
    }


    /**
     * Single Blog
     */
    public function show(
        string              $locale,
        string              $slug,
        BlogTableOfContents $tocService,
        SchemaService       $schemaService
    )
    {
        $blog = Blog::query()
            ->with([
                'category',
                'tags',

                'faqs' => fn($query) => $query
                    ->where('is_active', true)
                    ->orderBy('sort_order'),
            ])
            ->where('slug', $slug)
            ->where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->firstOrFail();


        /*
        |--------------------------------------------------------------------------
        | Table of Contents
        |--------------------------------------------------------------------------
        */

        $tocData = $tocService->generate(
            $blog->content ?? ''
        );

        $content = $tocData['content'];
        $toc = $tocData['items'];

        /*
        |--------------------------------------------------------------------------
        | Schema
        |--------------------------------------------------------------------------
        */

        $schemas = $schemaService->blog(
            $blog
        );
        /*
        |--------------------------------------------------------------------------
        | Related Blogs
        |--------------------------------------------------------------------------
        */

        $relatedBlogs = Blog::query()
            ->with('category')
            ->where('is_active', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->where('id', '!=', $blog->id)
            ->where(
                'blog_category_id',
                $blog->blog_category_id
            )
            ->latest('published_at')
            ->take(3)
            ->get();


        return view('pages.blogs.show', compact(
            'blog',
            'content',
            'toc',
            'schemas',
            'relatedBlogs'
        ));
    }
}
