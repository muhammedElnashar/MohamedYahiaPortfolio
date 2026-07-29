<div class="mobile-menu" id="mobile-menu">
    <a
        class="mnl"
        href="{{route('about',app()->currentLocale()) }}"
    >
        {{ __('navigation.about') }}
    </a>

    <a
        class="mnl"
        href="{{ url('/' . app()->getLocale()) }}#services"
    >
        {{ __('navigation.services') }}
    </a>

    <a
        class="mnl"
        href="{{ url('/' . app()->getLocale()) }}#cases"
    >
        {{ __('navigation.results') }}
    </a>

    <a
        class="mnl"
        href="{{ url('/' . app()->getLocale()) }}#tools"
    >
        {{ __('navigation.tools') }}
    </a>

    <a
        class="mnl"
        href="{{ url('/' . app()->getLocale()) }}#contact"
    >
        {{ __('navigation.contact') }}
    </a>
    <a
        class="mnl"
        href="{{route('blogs.index',app()->currentLocale()) }}"
    >
        {{ __('navigation.blogs') }}
    </a>
</div>
