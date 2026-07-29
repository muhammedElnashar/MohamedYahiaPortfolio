<nav>

    {{-- Logo --}}
    <a
        href="{{ url('/' . app()->getLocale()) }}"
        class="logo"
        aria-label="Mohamed Yahia"
    >
        <div class="logo-ring">
            <i data-lucide="trending-up"></i>
        </div>

        <div class="logo-name">
            Mohamed <em>Yahia</em>
        </div>
    </a>


    {{-- Desktop Navigation --}}
    <div class="nav-links">

        <a
            class="nl"
            href="{{route('about',app()->currentLocale()) }}"
        >
            {{ __('navigation.about') }}
        </a>

        <a
            class="nl"
            href="{{ url('/' . app()->getLocale()) }}#services"
        >
            {{ __('navigation.services') }}
        </a>

        <a
            class="nl"
            href="{{ url('/' . app()->getLocale()) }}#cases"
        >
            {{ __('navigation.results') }}
        </a>

        <a
            class="nl"
            href="{{ url('/' . app()->getLocale()) }}#tools"
        >
            {{ __('navigation.tools') }}
        </a>

        <a
            class="nl"
            href="{{ url('/' . app()->getLocale()) }}#contact"
        >
            {{ __('navigation.contact') }}
        </a>
        <a
            class="nl"
            href="{{route('blogs.index',app()->currentLocale()) }}"
        >
            {{ __('navigation.blogs') }}
        </a>
    </div>


    {{-- Right Side --}}
    <div class="nav-right">

        {{-- Theme Toggle --}}
        <button
            class="tbtn"
            type="button"
            onclick="toggleTheme()"
            aria-label="{{ __('navigation.toggle_theme') }}"
        >
            <i
                data-lucide="moon"
                id="theme-icon"
            ></i>
        </button>


        {{-- Language Switcher --}}
        <div class="lswitch">

            <a
                class="lbtn {{ app()->getLocale() === 'ar' ? 'on' : '' }}"
                href="{{ switchLocaleUrl('ar') }}"
                hreflang="ar"
                lang="ar"
            >
                AR
            </a>

            <a
                class="lbtn {{ app()->getLocale() === 'en' ? 'on' : '' }}"
                href="{{ switchLocaleUrl('en') }}"
                hreflang="en"
                lang="en"
            >
                EN
            </a>

        </div>


        {{-- CTA --}}
        <a
            class="ncta"
            href="{{ url('/' . app()->getLocale()) }}#contact"
        >
            <i data-lucide="message-circle"></i>

            <span>
                {{ __('navigation.free_consultation') }}
            </span>
        </a>


        {{-- Mobile Menu --}}
        <button
            class="hamburger"
            id="hamburger"
            type="button"
            onclick="toggleMenu()"
            aria-label="{{ __('navigation.toggle_menu') }}"
            aria-expanded="false"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>

</nav>
