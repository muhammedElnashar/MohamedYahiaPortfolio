<?php

if (! function_exists('switchLocaleUrl')) {

    function switchLocaleUrl(string $locale): string
    {
        $segments = request()->segments();

        if (
            isset($segments[0]) &&
            in_array($segments[0], ['ar', 'en'])
        ) {
            $segments[0] = $locale;
        } else {
            array_unshift($segments, $locale);
        }

        return url(implode('/', $segments));
    }
}
