@extends('layouts.app')

@section('title',$blog->meta_title ?: $blog->title)
@section(
    'meta_description',
    $blog->meta_description ?: $blog->excerpt
)
@section(
    'canonical',
    route('blogs.show', [
        'locale' => app()->getLocale(),
        'slug' => $blog->slug,
    ])
)
@push('css')
    @vite(['resources/css/sections/blog-page.css'])
@endpush
@push('schema')
    <x-schema :schemas="$schemas" />
@endpush

@section('content')

    <article class="single-blog">


        {{-- ==========================================
             ARTICLE HEADER
        =========================================== --}}

        <header class="single-blog-header">

            <div class="single-blog-header-inner">


                {{-- Category --}}

                @if($blog->category)

                    <a
                        href="{{ route('blogs.index', [
                        app()->currentLocale(),
                        'category' => $blog->category->slug
                    ]) }}"
                        class="single-blog-category"
                    >

                        {{ $blog->category->name }}

                    </a>

                @endif



                {{-- Title --}}

                <h1>
                    {{ $blog->title }}
                </h1>



                {{-- Excerpt --}}

                @if($blog->excerpt)

                    <p class="single-blog-excerpt">
                        {{ $blog->excerpt }}
                    </p>

                @endif



                {{-- Meta --}}

                <div class="single-blog-meta">


                    @if($blog->author_name)

                        <div class="single-blog-author">

                            <div class="single-author-avatar">
                                {{ mb_strtoupper(
                                    mb_substr($blog->author_name, 0, 1)
                                ) }}
                            </div>

                            <div class="single-author-info">

                            <span class="single-meta-label">
                                Written by
                            </span>

                                <strong>
                                    {{ $blog->author_name }}
                                </strong>

                            </div>

                        </div>

                    @endif



                    <div class="single-meta-items">


                        @if($blog->published_at)

                            <div class="single-meta-item">

                                <i data-lucide="calendar-days"></i>

                                <div>

                                <span>
                                    Published
                                </span>

                                    <strong>
                                        {{ $blog->published_at->format('M d, Y') }}
                                    </strong>

                                </div>

                            </div>

                        @endif



                        @if($blog->reading_time)

                            <div class="single-meta-item">

                                <i data-lucide="clock-3"></i>

                                <div>

                                <span>
                                    Reading time
                                </span>

                                    <strong>
                                        {{ $blog->reading_time }} min read
                                    </strong>

                                </div>

                            </div>

                        @endif


                    </div>

                </div>

            </div>

        </header>



        {{-- ==========================================
             FEATURED IMAGE
        =========================================== --}}

        @if($blog->featured_image)

            <div class="single-blog-cover-wrap">

                <div class="single-blog-cover">

                    <img
                        src="{{ asset('storage/' . $blog->featured_image) }}"
                        alt="{{ $blog->title }}"
                    >

                </div>

            </div>

        @endif

        {{-- ==========================================
             TABLE OF CONTENTS
        =========================================== --}}
        @if(!empty($toc))

            <div class="simple-toc">

                <button
                    type="button"
                    class="simple-toc-toggle"
                    aria-expanded="false"
                >
            <span class="simple-toc-title">
                <i data-lucide="list"></i>

                {{ app()->isLocale('ar')
                    ? 'محتويات المقال'
                    : 'Table of Contents'
                }}
            </span>

                    <i
                        data-lucide="chevron-down"
                        class="simple-toc-chevron"
                    ></i>
                </button>


                <div class="simple-toc-collapse">

                    <div class="simple-toc-content">

                        @foreach($toc as $index => $item)

                            <a
                                href="#{{ $item['id'] }}"
                                class="simple-toc-link {{ $item['level'] === 3 ? 'is-child' : '' }}"
                            >
                        <span class="simple-toc-number">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                                <span>
                            {{ $item['text'] }}
                        </span>
                            </a>

                        @endforeach

                    </div>

                </div>

            </div>

        @endif
        {{-- ==========================================
             ARTICLE BODY
        =========================================== --}}

        <div class="single-blog-layout">


            {{-- Content --}}

            <main class="single-blog-content">

                {!! $blog->content !!}

            </main>


        </div>


        {{-- ==========================================
             FAQ
        =========================================== --}}

        @if($blog->faqs->isNotEmpty())

            <section class="blog-faq">

                <div class="blog-faq-inner">

                    <div class="blog-faq-header">

                <span class="blog-faq-eyebrow">
                    {{ app()->isLocale('ar')
                        ? 'أسئلة شائعة'
                        : 'FAQ'
                    }}
                </span>

                        <h2>
                            {{ app()->isLocale('ar')
                                ? 'الأسئلة الشائعة'
                                : 'Frequently Asked Questions'
                            }}
                        </h2>

                        <p>
                            {{ app()->isLocale('ar')
                                ? 'إجابات على أبرز الأسئلة المتعلقة بهذا الموضوع.'
                                : 'Answers to the most common questions about this topic.'
                            }}
                        </p>

                    </div>


                    <div class="blog-faq-list">

                        @foreach($blog->faqs as $index => $faq)

                            <details class="blog-faq-item">

                                <summary class="blog-faq-question">

                                    {{-- Number --}}
                                    <span class="faq-number">
                                {{ str_pad(
                                    $index + 1,
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                ) }}
                            </span>


                                    {{-- Question --}}
                                    <span class="faq-question-text">
                                {{ $faq->question }}
                            </span>


                                    {{-- Icon --}}
                                    <span class="faq-icon" aria-hidden="true">
                                <i data-lucide="plus"></i>
                            </span>

                                </summary>


                                <div class="blog-faq-answer">

                                    <p>
                                        {{ $faq->answer }}
                                    </p>

                                </div>

                            </details>

                        @endforeach

                    </div>

                </div>

            </section>

        @endif
        {{-- ==========================================
             TAGS
        =========================================== --}}

        @if($blog->tags->isNotEmpty())

            <div class="single-blog-tags-wrap">

                <div class="single-blog-tags-inner">


                    <div class="single-tags-title">

                        <i data-lucide="tags"></i>

                        <span>
                        Topics
                    </span>

                    </div>


                    <div class="single-blog-tags">

                        @foreach($blog->tags as $tag)

                            <span class="single-blog-tag">

                            #{{ $tag->name }}

                        </span>

                        @endforeach

                    </div>


                </div>

            </div>

        @endif



        {{-- ==========================================
             ARTICLE FOOTER
        =========================================== --}}

        <div class="single-article-footer">

            <div class="single-article-footer-inner">


                <a
                    href="{{ route(
                    'blogs.index',
                    app()->currentLocale()
                ) }}"
                    class="back-to-blog"
                >

                    <i data-lucide="arrow-left"></i>

                    All Articles

                </a>


                @if($blog->category)

                    <a
                        href="{{ route('blogs.index', [
                        app()->currentLocale(),
                        'category' => $blog->category->slug
                    ]) }}"
                        class="more-category"
                    >

                        More in {{ $blog->category->name }}

                        <i data-lucide="arrow-right"></i>

                    </a>

                @endif


            </div>

        </div>



        {{-- ==========================================
             RELATED ARTICLES
        =========================================== --}}

        @if($relatedBlogs->isNotEmpty())

            <section class="related-blogs">

                <div class="si">


                    {{-- Heading --}}

                    <div class="related-heading">

                        <div>

                        <span>
                            KEEP READING
                        </span>

                            <h2>
                                Related Articles
                            </h2>

                        </div>


                        <div class="related-heading-line"></div>


                        <a
                            href="{{ route(
                            'blogs.index',
                            app()->currentLocale()
                        ) }}"
                        >

                            View all

                            <i data-lucide="arrow-right"></i>

                        </a>

                    </div>



                    {{-- Grid --}}

                    <div class="related-grid">


                        @foreach($relatedBlogs as $related)

                            <article class="related-card">


                                {{-- Image --}}

                                <a
                                    href="{{ route('blogs.show', [
                                    app()->currentLocale(),
                                    $related->slug
                                ]) }}"
                                    class="related-image"
                                >

                                    @if($related->featured_image)

                                        <img
                                            src="{{ asset(
                                            'storage/' .
                                            $related->featured_image
                                        ) }}"
                                            alt="{{ $related->title }}"
                                            loading="lazy"
                                        >

                                    @else

                                        <div class="related-placeholder">

                                            <i data-lucide="newspaper"></i>

                                        </div>

                                    @endif


                                    <span class="related-arrow">

                                    <i data-lucide="arrow-up-right"></i>

                                </span>

                                </a>



                                {{-- Content --}}

                                <div class="related-body">


                                    <div class="related-top">


                                        @if($related->category)

                                            <span class="related-category">

                                            {{ $related->category->name }}

                                        </span>

                                        @endif



                                        @if($related->reading_time)

                                            <span class="related-time">

                                            {{ $related->reading_time }} min

                                        </span>

                                        @endif


                                    </div>



                                    <h3>

                                        <a
                                            href="{{ route('blogs.show', [
                                            app()->currentLocale(),
                                            $related->slug
                                        ]) }}"
                                        >

                                            {{ $related->title }}

                                        </a>

                                    </h3>



                                    @if($related->excerpt)

                                        <p>
                                            {{ $related->excerpt }}
                                        </p>

                                    @endif



                                    <div class="related-footer">


                                        @if($related->published_at)

                                            <span>

                                            {{ $related->published_at
                                                ->format('M d, Y') }}

                                        </span>

                                        @endif


                                        <a
                                            href="{{ route('blogs.show', [
                                            app()->currentLocale(),
                                            $related->slug
                                        ]) }}"
                                        >

                                            Read

                                            <i data-lucide="arrow-right"></i>

                                        </a>


                                    </div>

                                </div>

                            </article>

                        @endforeach


                    </div>

                </div>

            </section>

        @endif


    </article>

@endsection
@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            document.querySelectorAll('.simple-toc').forEach(toc => {

                const button = toc.querySelector('.simple-toc-toggle');

                button.addEventListener('click', () => {

                    const open = toc.classList.toggle('is-open');

                    button.setAttribute(
                        'aria-expanded',
                        open ? 'true' : 'false'
                    );

                });

            });

        });
    </script>

@endpush
