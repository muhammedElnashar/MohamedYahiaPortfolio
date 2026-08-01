export function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const hamburger = document.querySelector('.hamburger');

    if (!menu) return;

    const isOpen = menu.classList.toggle('open');

    hamburger?.classList.toggle('open', isOpen);

    document.body.classList.toggle('menu-open', isOpen);
}
