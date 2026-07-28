<head>
<title>{{ $seo?->title }}</title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta
    name="description"
    content="{{ $seo?->meta_description }}"
>

<meta
    name="keywords"
    content="{{ $seo?->meta_keywords }}"
>

<meta
    name="author"
    content="{{ $seo?->author }}"
>

<meta
    name="robots"
    content="{{ $seo?->robots }}"
>

<link
    rel="canonical"
    href="{{ $seo?->canonical_url }}"
>

<meta
    property="og:title"
    content="{{ $seo?->og_title }}"
>

<meta
    property="og:description"
    content="{{ $seo?->og_description }}"
>

@if($seo?->schema)
    <script type="application/ld+json">
        {!! $seo->schema !!}
    </script>
@endif
    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
])
    @yield('schema')
    @stack('head')
    @stack('js')
</head>
