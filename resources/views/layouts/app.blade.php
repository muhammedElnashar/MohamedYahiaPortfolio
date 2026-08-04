<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"
      dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}"  data-theme="dark" >



    @include('partials.head')

<body>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
@dd(config('services.google.tag_manager_id'))
@if(config('services.google.tag_manager_id'))
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNM8X9B8"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif
@include('partials.navbar')

@yield('content')

@include('partials.footer')
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        lucide.createIcons();
    });

    document.addEventListener('livewire:initialized', () => {
        Livewire.hook('morphed', () => {
            lucide.createIcons();
        });
    });
</script>
@stack('script')

</body>
</html>
