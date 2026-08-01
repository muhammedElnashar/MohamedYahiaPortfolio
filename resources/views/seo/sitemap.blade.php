{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
{!! '<?xml-stylesheet type="text/xsl" href="/sitemap.xsl"?>' !!}

<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xhtml="http://www.w3.org/1999/xhtml">

    @foreach($urls as $url)
        <url>

            <loc>{{ $url['loc'] }}</loc>

            @foreach($url['alternates'] as $locale => $alternate)
                <xhtml:link
                    rel="alternate"
                    hreflang="{{ $locale }}"
                    href="{{ $alternate }}" />
            @endforeach

            <xhtml:link
                rel="alternate"
                hreflang="x-default"
                href="{{ $url['alternates']['en'] }}" />

            @if($url['lastmod'])
                <lastmod>{{ \Illuminate\Support\Carbon::parse($url['lastmod'])->toAtomString() }}</lastmod>
            @endif

            <changefreq>{{ $url['changefreq'] }}</changefreq>

            <priority>{{ $url['priority'] }}</priority>

        </url>
    @endforeach

</urlset>
