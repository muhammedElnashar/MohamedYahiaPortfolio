<head>

    <title>
        @yield('title', config('app.name'))
    </title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&family=Cairo:wght@400;600;700;900&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    {{-- Basic --}}
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >


    {{-- Description --}}
    @hasSection('meta_description')
        <meta
            name="description"
            content="@yield('meta_description')"
        >
    @endif


    {{-- Keywords --}}
    @hasSection('meta_keywords')
        <meta
            name="keywords"
            content="@yield('meta_keywords')"
        >
    @endif


    {{-- Author --}}
    @hasSection('meta_author')
        <meta
            name="author"
            content="@yield('meta_author')"
        >
    @endif


    {{-- Robots --}}
    <meta
        name="robots"
        content="@yield('robots', 'index, follow')"
    >


    {{-- Canonical --}}
    @hasSection('canonical')
        <link
            rel="canonical"
            href="@yield('canonical')"
        >
    @endif


    {{-- Open Graph Title --}}
    @hasSection('og_title')
        <meta
            property="og:title"
            content="@yield('og_title')"
        >
    @endif


    {{-- Open Graph Description --}}
    @hasSection('og_description')
        <meta
            property="og:description"
            content="@yield('og_description')"
        >
    @endif


    {{-- Global Assets --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])


    {{-- Schema --}}
    @stack('schema')


    {{-- Page CSS --}}
    @stack('css')

</head>
