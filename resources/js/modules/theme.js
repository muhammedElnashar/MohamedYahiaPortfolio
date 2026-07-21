import { initIcons } from './icons';

export let theme = 'dark';

export function toggleTheme() {

    theme = theme === 'dark'
        ? 'light'
        : 'dark';

    document.documentElement.setAttribute(
        'data-theme',
        theme
    );

    document
        .getElementById('theme-icon')
        ?.setAttribute(
            'data-lucide',
            theme === 'dark'
                ? 'moon'
                : 'sun'
        );

    initIcons();
}
