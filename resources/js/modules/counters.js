export function initCounters() {

    const statsBand =
        document.querySelector('.sband');

    if (!statsBand) {
        return;
    }

    const observer =
        new IntersectionObserver(
            entries => {

                if (!entries[0].isIntersecting) {
                    return;
                }

                document
                    .querySelectorAll('.sttn[data-target]')
                    .forEach(counter => {

                        const target =
                            parseInt(
                                counter.dataset.target
                            );

                        const suffix =
                            counter.dataset.suf || '';

                        let current = 0;

                        const step =
                            Math.ceil(target / 55);

                        const timer =
                            setInterval(() => {

                                current =
                                    Math.min(
                                        current + step,
                                        target
                                    );

                                counter.textContent =
                                    current + suffix;

                                if (
                                    current >= target
                                ) {
                                    clearInterval(
                                        timer
                                    );
                                }

                            }, 22);
                    });

                observer.disconnect();

            },
            {
                threshold: 0.3
            }
        );

    observer.observe(statsBand);
}
