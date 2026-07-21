export function filterSvc(cat, btn) {
    document.querySelectorAll('.sf-btn').forEach(button => {
        button.classList.remove('on');
    });

    btn.classList.add('on');

    document.querySelectorAll('.svc-card').forEach(card => {
        card.style.display =
            (cat === 'all' || card.dataset.svc === cat)
                ? 'block'
                : 'none';
    });
}

export function filterCS(cat, btn) {
    document.querySelectorAll('.cs-tab').forEach(tab => {
        tab.classList.remove('on');
    });

    btn.classList.add('on');

    document.querySelectorAll('.cs-card').forEach(card => {
        card.classList.toggle(
            'show',
            cat === 'all' || card.dataset.cat === cat
        );
    });
}
