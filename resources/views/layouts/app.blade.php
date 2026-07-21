<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"
      dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}"  data-theme="dark" >

<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&family=Cairo:wght@400;600;700;900&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet"/>

    @include('partials.head')

<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')
<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.hook('morphed', () => {
            lucide.createIcons();
        });
    });
</script>
</body>
</html>
