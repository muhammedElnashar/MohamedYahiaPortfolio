<head>

    {{-- Charset --}}
    <meta charset="UTF-8">

    {{-- Viewport --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title --}}
    <title>{{ seo()->get('meta_title', config('app.name')) }}</title>
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/icons/favicon.ico') }}" sizes="any">

    <link rel="icon"
          type="image/png"
          sizes="32x32"
          href="{{ asset('assets/icons/favicon-32x32.png') }}">

    <link rel="icon"
          type="image/png"
          sizes="16x16"
          href="{{ asset('assets/icons/favicon-16x16.png') }}">

    <link rel="apple-touch-icon"
          sizes="180x180"
          href="{{ asset('assets/icons/apple-touch-icon.png') }}">

    <link rel="manifest"
          href="{{ asset('assets/icons/site.webmanifest') }}">

    {{-- Theme --}}
    <meta name="theme-color" content="#0F172A">
    <meta name="color-scheme" content="light dark">

    {{-- Canonical --}}
    <link rel="canonical"
          href="{{ seo()->get('canonical_url', url()->current()) }}">

    {{-- Description --}}
    <meta name="description"
          content="{{ seo()->get('meta_description', '') }}">

    {{-- Keywords --}}
    <meta name="keywords"
          content="{{ seo()->get('meta_keywords', '') }}">

    {{-- Author --}}
    <meta name="author"
          content="{{ seo()->get('meta_author', config('app.name')) }}">

    {{-- Robots --}}
    <meta name="robots"
          content="{{ seo()->get('robots', 'index,follow') }}">

    {{-- Open Graph --}}
    <meta property="og:type"
          content="{{ seo()->get('og_type', 'website') }}">

    <meta property="og:url"
          content="{{ url()->current() }}">

    <meta property="og:site_name"
          content="{{ config('app.name') }}">

    <meta property="og:locale"
          content="{{ app()->getLocale() === 'ar' ? 'ar_EG' : 'en_US' }}">

    <meta property="og:title"
          content="{{ seo()->get('og_title', seo()->get('meta_title', config('app.name'))) }}">

    <meta property="og:description"
          content="{{ seo()->get('og_description', seo()->get('meta_description', '')) }}">

    <meta property="og:image"
          content="{{ seo()->get('og_image', asset('assets/images/og-default.webp')) }}">

    {{-- Twitter --}}
    <meta name="twitter:card"
          content="summary_large_image">

    <meta name="twitter:title"
          content="{{ seo()->get('twitter_title', seo()->get('meta_title', config('app.name'))) }}">

    <meta name="twitter:description"
          content="{{ seo()->get('twitter_description', seo()->get('meta_description', '')) }}">
    <meta name="twitter:image"
          content="{{ seo()->get('twitter_image', seo()->get('og_image', asset('assets/images/og-default.webp'))) }}">

    {{-- Fonts --}}
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&family=Cairo:wght@400;600;700;900&family=Space+Grotesk:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    {{-- Assets --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])

    {{-- Structured Data --}}
    @include('components.schema-partial', [
        'schemas' => $schemas ?? [],
    ])

    {{-- Page Styles --}}
    @stack('css')
    @if(config('services.google.tag_manager_id'))
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KNM8X9B8');</script>
        <!-- End Google Tag Manager -->

    @endif
</head>
