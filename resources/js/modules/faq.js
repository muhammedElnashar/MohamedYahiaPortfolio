import { initIcons } from './icons';

export function initFAQ() {

    document
        .querySelectorAll('.faq-q')
        .forEach(question => {

            question.addEventListener(
                'click',
                () => {

                    question
                        .parentElement
                        .classList
                        .toggle('open');

                    initIcons();
                }
            );

        });
}
