import { initIcons } from './modules/icons';
import { toggleTheme } from './modules/theme';
import { setLang } from './modules/language';
import { toggleMenu } from './modules/menu';
import { scrollToSection } from './modules/navigation';
import { filterSvc, filterCS } from './modules/filters';
import { initFAQ } from './modules/faq';
import { initCounters } from './modules/counters';
import { handleSubmit } from './modules/contact';

window.toggleTheme = toggleTheme;
/*
window.setLang = setLang;
*/
window.toggleMenu = toggleMenu;
window.sc = scrollToSection;

window.filterSvc = filterSvc;
window.filterCS = filterCS;
window.handleSubmit = handleSubmit;

document.addEventListener('DOMContentLoaded', () => {

    initIcons();
    initFAQ();
    initCounters();

});
