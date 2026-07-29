@extends('layouts.app')

@section('title', 'Blog')

@push('css')
    @vite(['resources/css/sections/blogs.css'])
@endpush
@push('schema')
    <x-schema :schemas="$schemas" />
@endpush

@section('content')

    <section class="blog-page">

        <div class="si">


            {{-- =========================
                 HERO
            ========================== --}}

            <header class="blog-head">

                <div class="eye">
                    BLOG & INSIGHTS
                </div>

                <h1 class="sh">
                    Ideas, Insights & SEO Strategies
                </h1>

                <p>
                    Practical insights about SEO, content, technical optimization
                    and the changing world of search.
                </p>

            </header>



            {{-- =========================
                 CATEGORY FILTER
            ========================== --}}

            <div class="blog-filters">

                {{-- All --}}

                <a
                    href="{{ route('blogs.index', app()->currentLocale()) }}"
                    class="blog-filter {{ !$categorySlug ? 'active' : '' }}"
                >

                    All

                </a>


                {{-- Categories --}}

                @foreach($categories as $category)

                    <a
                        href="{{ route('blogs.index', [
                        app()->currentLocale(),
                        'category' => $category->slug
                    ]) }}"
                        class="blog-filter
                        {{ $categorySlug === $category->slug ? 'active' : '' }}"
                    >

                        {{ $category->name }}

                        <span>
                        {{ $category->blogs_count }}
                    </span>

                    </a>

                @endforeach

            </div>



            {{-- =========================
                 ARTICLES HEADER
            ========================== --}}

            <div class="blog-section-head">

                <div>

                <span class="blog-section-label">
                    DISCOVER
                </span>

                    <h2>

                        @if($categorySlug)

                            {{ $categories->firstWhere('slug', $categorySlug)?->name
                                ?? 'Articles' }}

                        @else

                            Latest Articles

                        @endif

                    </h2>

                </div>


                <div class="blog-section-line"></div>


                <div class="articles-count">

                    {{ $blogs->total() }}

                    {{ Str::plural('Article', $blogs->total()) }}

                </div>

            </div>



            {{-- =========================
                 BLOG GRID
            ========================== --}}

            <div class="blogs-grid">

                @forelse($blogs as $blog)

                    <article class="article-card">


                        {{-- IMAGE --}}

                        <a
                            href="{{ route('blogs.show', [
                            app()->currentLocale(),
                            $blog->slug
                        ]) }}"
                            class="article-image"
                        >

                            @if($blog->featured_image)

                                <img
                                    src="{{ asset(
                                    'storage/' . $blog->featured_image
                                ) }}"
                                    alt="{{ $blog->title }}"
                                    loading="lazy"
                                >

                            @else

                                <div class="blog-placeholder">

                                    <i data-lucide="newspaper"></i>

                                </div>

                            @endif


                            {{-- Hover Arrow --}}

                            <span class="article-image-arrow">

                            <i data-lucide="arrow-up-right"></i>

                        </span>


                            {{-- Featured badge optional --}}

                            @if($blog->is_featured)

                                <span class="featured-badge">

                                <i data-lucide="star"></i>

                                Featured

                            </span>

                            @endif

                        </a>



                        {{-- =========================
                             CONTENT
                        ========================== --}}

                        <div class="article-body">


                            {{-- CATEGORY + TIME --}}

                            <div class="article-top">

                                @if($blog->category)

                                    <span class="article-category">

                                    {{ $blog->category->name }}

                                </span>

                                @endif


                                @if($blog->reading_time)

                                    <span class="article-time">

                                    <i data-lucide="clock-3"></i>

                                    {{ $blog->reading_time }} min

                                </span>

                                @endif

                            </div>



                            {{-- TITLE --}}

                            <h2>

                                <a
                                    href="{{ route('blogs.show', [
                                    app()->currentLocale(),
                                    $blog->slug
                                ]) }}"
                                >

                                    {{ $blog->title }}

                                </a>

                            </h2>



                            {{-- EXCERPT --}}

                            @if($blog->excerpt)

                                <p class="article-excerpt">

                                    {{ $blog->excerpt }}

                                </p>

                            @endif



                            {{-- FOOTER --}}

                            <div class="article-footer">


                                {{-- DATE --}}

                                <div class="article-date">

                                    @if($blog->published_at)

                                        <i data-lucide="calendar-days"></i>

                                        {{ $blog->published_at->format('M d, Y') }}

                                    @endif

                                </div>



                                {{-- READ --}}

                                <a
                                    href="{{ route('blogs.show', [
                                    app()->currentLocale(),
                                    $blog->slug
                                ]) }}"
                                    class="article-read"
                                >

                                    Read article

                                    <i data-lucide="arrow-right"></i>

                                </a>

                            </div>


                        </div>

                    </article>


                @empty


                    {{-- =========================
                         EMPTY
                    ========================== --}}

                    <div class="blogs-empty">

                        <div class="empty-icon">

                            <i data-lucide="search-x"></i>

                        </div>

                        <h3>
                            No articles found
                        </h3>

                        <p>
                            There are currently no articles
                            in this category.
                        </p>


                        @if($categorySlug)

                            <a
                                href="{{ route(
                                'blogs.index',
                                app()->currentLocale()
                            ) }}"
                            >
                                View all articles
                            </a>

                        @endif

                    </div>


                @endforelse

            </div>



            {{-- =========================
                 PAGINATION
            ========================== --}}

            @if($blogs->hasPages())

                <div class="blog-pagination">

                    {{ $blogs->links() }}

                </div>

            @endif


        </div>

    </section>




@endsection
