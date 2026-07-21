import { initIcons } from './icons';

export function goHome() {

    document
        .querySelectorAll('.page')
        .forEach(page =>
            page.classList.remove('active')
        );

    document
        .getElementById('page-home')
        ?.classList.add('active');

    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

export function showSP() {

    document
        .querySelectorAll('.page')
        .forEach(page =>
            page.classList.remove('active')
        );

    document
        .getElementById('page-service')
        ?.classList.add('active');

    window.scrollTo({ top: 0 });

    setTimeout(initIcons, 60);
}
