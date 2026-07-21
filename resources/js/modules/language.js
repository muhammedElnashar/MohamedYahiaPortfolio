import { initIcons } from './icons';

export let lang = 'ar';

export function setLang(locale) {

    lang = locale;

    document.documentElement.setAttribute(
        'data-lang',
        locale
    );

    document.documentElement.setAttribute(
        'dir',
        locale === 'ar'
            ? 'rtl'
            : 'ltr'
    );

    document.documentElement.setAttribute(
        'lang',
        locale
    );

    document
        .getElementById('btn-ar')
        ?.classList.toggle(
        'on',
        locale === 'ar'
    );

    document
        .getElementById('btn-en')
        ?.classList.toggle(
        'on',
        locale === 'en'
    );

    const backIcon =
        document.getElementById('back-icon');

    if (backIcon) {

        backIcon.setAttribute(
            'data-lucide',
            locale === 'ar'
                ? 'arrow-right'
                : 'arrow-left'
        );
    }

    initIcons();
}
