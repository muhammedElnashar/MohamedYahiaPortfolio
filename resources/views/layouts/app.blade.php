<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"
      dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}"  data-theme="dark" >



    @include('partials.head')

<body>

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
