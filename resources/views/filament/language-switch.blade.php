<x-filament::dropdown placement="bottom-end">
    <x-slot name="trigger">
        <x-filament::button
            color="gray"
            size="sm"
            icon="heroicon-m-language"
        >
            {{ strtoupper(app()->getLocale()) }}
        </x-filament::button>
    </x-slot>

    <x-filament::dropdown.list>

        <a
            href="{{ route('language.switch', 'ar') }}"
            class="fi-dropdown-list-item flex items-center gap-2 w-full"
        >
            @if(app()->getLocale() === 'ar')
                ✓
            @endif

            العربية
        </a>

        <a
            href="{{ route('language.switch', 'en') }}"
            class="fi-dropdown-list-item flex items-center gap-2 w-full"
        >
            @if(app()->getLocale() === 'en')
                ✓
            @endif

            English
        </a>

    </x-filament::dropdown.list>
</x-filament::dropdown>
