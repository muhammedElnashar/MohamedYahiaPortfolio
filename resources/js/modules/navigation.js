import { goHome } from './pages';

export function scrollToSection(id) {

    const homePage =
        document.getElementById('page-home');

    if (!homePage?.classList.contains('active')) {

        goHome();

        setTimeout(() => {

            document
                .getElementById(id)
                ?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

        }, 80);

        return;
    }

    document
        .getElementById(id)
        ?.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
}
