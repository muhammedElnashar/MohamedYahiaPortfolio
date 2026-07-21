export function handleSubmit(btn) {

    const name =
        document.getElementById('f-name')
            ?.value
            .trim();

    const msg =
        document.getElementById('f-msg')
            ?.value
            .trim();

    if (!name || !msg) {
        return;
    }

    const site =
        document.getElementById('f-site')
            ?.value
            .trim();

    const svc =
        document.getElementById('f-svc')
            ?.value;

    const text =
        `Hello Mohamed,

Name: ${name}
Website: ${site || 'N/A'}
Service: ${svc || 'N/A'}

Message:
${msg}`;

    window.open(
        `https://wa.me/201123269452?text=${encodeURIComponent(text)}`,
        '_blank'
    );
}
