@extends('layouts.app')
@section('content')
    @include('pages.platform.paltform')
@endsection
@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            document.querySelectorAll('.whatsapp-contact-form').forEach(function (form) {

                form.addEventListener('submit', function (e) {
                    e.preventDefault();

                    const name = form.querySelector('[name="name"]').value.trim();
                    const site = form.querySelector('[name="site"]').value.trim();
                    const message = form.querySelector('[name="message"]').value.trim();

                    const phone = '201123269452';

                    let text =
                        `مرحباً، لدي استفسار جديد من الموقع.

الاسم: ${name}
الموقع: ${site || 'غير مضاف'}

الرسالة:
${message}`;

                    const whatsappUrl =
                        'https://wa.me/' +
                        phone +
                        '?text=' +
                        encodeURIComponent(text);

                    window.open(whatsappUrl, '_blank');
                });

            });

        });
    </script>
@endpush
