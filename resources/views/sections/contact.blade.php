@php
    $heading = $sections->get(
        \App\Enums\HomeSectionKey::CONTACT->value
    );
@endphp

@if($info)

    <section id="contact" class="contact-section">

        <div class="si contact-container">

            {{-- =========================================
                 SECTION HEADER
            ========================================== --}}

            <header class="contact-header">

                @if($heading?->eyebrow)
                    <div class="eye">
                        <span>{{ $heading->eyebrow }}</span>
                    </div>
                @endif

                @if($heading?->title)
                    <h2 class="sh">
                        {{ $heading->title }}
                    </h2>
                @endif

            </header>


            <div class="contact-wrap">


                {{-- =========================================
                     CONTACT INFO
                ========================================== --}}

                <div class="ci">

                    <div class="contact-info-header">

                        @if($info?->name)
                            <h3>{{ $info->name }}</h3>
                        @endif

                        @if($info?->description)
                            <p>{{ $info->description }}</p>
                        @endif

                    </div>


                    <div class="contact-items">


                        {{-- WhatsApp --}}

                        @if($info->whatsapp)

                            <div class="citem">

                                <div class="citem-ico">
                                    <i data-lucide="message-circle"></i>
                                </div>

                                <div class="citem-content">

                                    <div class="citem-label">
                                        WhatsApp
                                    </div>

                                    <a
                                        href="https://wa.me/{{ $info->whatsapp }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        +{{ $info->whatsapp }}
                                    </a>

                                </div>

                                <i
                                    class="citem-arrow"
                                    data-lucide="arrow-up-right"
                                ></i>

                            </div>

                        @endif


                        {{-- Email --}}

                        @if($info->email)

                            <div class="citem">

                                <div class="citem-ico">
                                    <i data-lucide="mail"></i>
                                </div>

                                <div class="citem-content">

                                    <div class="citem-label">
                                        Email
                                    </div>

                                    <a href="mailto:{{ $info->email }}">
                                        {{ $info->email }}
                                    </a>

                                </div>

                                <i
                                    class="citem-arrow"
                                    data-lucide="arrow-up-right"
                                ></i>

                            </div>

                        @endif


                        {{-- LinkedIn --}}

                        @if($info->linkedin_url)

                            <div class="citem">

                                <div class="citem-ico">
                                    <i data-lucide="linkedin"></i>
                                </div>

                                <div class="citem-content">

                                    <div class="citem-label">
                                        LinkedIn
                                    </div>

                                    <a
                                        href="{{ $info->linkedin_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        {{ $info->linkedin_label }}
                                    </a>

                                </div>

                                <i
                                    class="citem-arrow"
                                    data-lucide="arrow-up-right"
                                ></i>

                            </div>

                        @endif


                        {{-- Mostaql --}}

                        @if($info->mostaql_url)

                            <div class="citem">

                                <div class="citem-ico">
                                    <i data-lucide="briefcase-business"></i>
                                </div>

                                <div class="citem-content">

                                    <div class="citem-label">
                                        Mostaql
                                    </div>

                                    <a
                                        href="{{ $info->mostaql_url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        {{ $info->mostaql_label }}
                                    </a>

                                </div>

                                <i
                                    class="citem-arrow"
                                    data-lucide="arrow-up-right"
                                ></i>

                            </div>

                        @endif


                        {{-- Location --}}

{{--
                        @if($info->location)

                            <div class="citem">

                                <div class="citem-ico">
                                    <i data-lucide="map-pin"></i>
                                </div>

                                <div class="citem-content">

                                    <div class="citem-label">
                                        <span class="ari">الموقع</span>
                                        <span class="eni">Location</span>
                                    </div>

                                    <span class="citem-value">
                                        {{ $info->location }}
                                    </span>

                                </div>

                            </div>

                        @endif
--}}

                    </div>


                    {{-- =========================================
                         FREE CONSULTATION
                    ========================================== --}}

                    @if(
                        $info->consultation_title ||
                        $info->consultation_description
                    )

                        <div class="cfree">

                            <div class="cfree-icon">
                                <i data-lucide="sparkles"></i>
                            </div>

                            <div class="cfree-content">

                                @if($info->consultation_title)
                                    <strong>
                                        {{ $info->consultation_title }}
                                    </strong>
                                @endif

                                @if($info->consultation_description)
                                    <p>
                                        {{ $info->consultation_description }}
                                    </p>
                                @endif

                            </div>

                        </div>

                    @endif


                    {{-- =========================================
                         SOCIAL LINKS
                    ========================================== --}}

                    <div class="social-row">

                        @if($info->whatsapp)

                            <a
                                class="sbtn"
                                href="https://wa.me/{{ $info->whatsapp }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="WhatsApp"
                            >
                                <i data-lucide="message-circle"></i>
                            </a>

                        @endif


                        @if($info->linkedin_url)

                            <a
                                class="sbtn"
                                href="{{ $info->linkedin_url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="LinkedIn"
                            >
                                <i data-lucide="linkedin"></i>
                            </a>

                        @endif


                        @if($info->mostaql_url)

                            <a
                                class="sbtn"
                                href="{{ $info->mostaql_url }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Mostaql"
                            >
                                <i data-lucide="briefcase-business"></i>
                            </a>

                        @endif


                        @if($info->email)

                            <a
                                class="sbtn"
                                href="mailto:{{ $info->email }}"
                                aria-label="Email"
                            >
                                <i data-lucide="mail"></i>
                            </a>

                        @endif

                    </div>

                </div>



                {{-- =========================================
                     CONTACT FORM
                ========================================== --}}

                <div class="cform">

                    <div class="cform-header">

                        <div class="cform-header-icon">
                            <i data-lucide="send"></i>
                        </div>

                        <div>

                            <div class="cform-title">

                                <span class="ari">
                                    أرسل رسالة مباشرة
                                </span>

                                <span class="eni">
                                    Send a Direct Message
                                </span>

                            </div>

                            <p class="cform-subtitle">

                                <span class="ari">
                                    أخبرني عن مشروعك وسأتواصل معك.
                                </span>

                                <span class="eni">
                                    Tell me about your project and I'll get back to you.
                                </span>

                            </p>

                        </div>

                    </div>


                    {{-- Success --}}

                    @if(session('contact_success'))

                        <div class="contact-success">

                            <i data-lucide="circle-check"></i>

                            <span>
                                {{ session('contact_success') }}
                            </span>

                        </div>

                    @endif


                    <form
                        action="{{ route('contact.store', app()->currentLocale()) }}"
                        method="POST"
                        class="contact-form"
                    >

                        @csrf


                        {{-- =====================================
                             NAME
                        ====================================== --}}

                        <div class="fg fg-full">

                            <label for="f-name">

                                <span class="ari">
                                    الاسم
                                </span>

                                <span class="eni">
                                    Your Name
                                </span>

                                <span class="required">*</span>

                            </label>

                            <input
                                type="text"
                                name="name"
                                id="f-name"
                                value="{{ old('name') }}"
                                placeholder="Mohamed Ahmed"
                                autocomplete="name"
                                required
                            >

                            @error('name')
                            <small class="field-error">
                                {{ $message }}
                            </small>
                            @enderror

                        </div>



                        {{-- =====================================
                             EMAIL
                        ====================================== --}}

                        <div class="fg">

                            <label for="f-email">

                                <span class="ari">
                                    البريد الإلكتروني
                                </span>

                                <span class="eni">
                                    Email
                                </span>

                            </label>

                            <input
                                type="email"
                                name="email"
                                id="f-email"
                                value="{{ old('email') }}"
                                placeholder="name@example.com"
                                autocomplete="email"
                            >

                            @error('email')
                            <small class="field-error">
                                {{ $message }}
                            </small>
                            @enderror

                        </div>



                        {{-- =====================================
                             PHONE
                        ====================================== --}}

                        <div class="fg">

                            <label for="f-phone">

                                <span class="ari">
                                    رقم الهاتف
                                </span>

                                <span class="eni">
                                    Phone
                                </span>

                            </label>

                            <input
                                type="tel"
                                name="phone"
                                id="f-phone"
                                value="{{ old('phone') }}"
                                placeholder="+966..."
                                autocomplete="tel"
                            >

                            @error('phone')
                            <small class="field-error">
                                {{ $message }}
                            </small>
                            @enderror

                        </div>



                        {{-- =====================================
                             WEBSITE
                        ====================================== --}}

                        <div class="fg">

                            <label for="f-site">

                                <span class="ari">
                                    الموقع الإلكتروني
                                </span>

                                <span class="eni">
                                    Your Website
                                </span>

                            </label>

                            <input
                                type="url"
                                name="website"
                                id="f-site"
                                value="{{ old('website') }}"
                                placeholder="https://yoursite.com"
                                autocomplete="url"
                            >

                            @error('website')
                            <small class="field-error">
                                {{ $message }}
                            </small>
                            @enderror

                        </div>



                        {{-- =====================================
                             SERVICE
                        ====================================== --}}

                        <div class="fg">

                            <label for="f-svc">

                                <span class="ari">
                                    الخدمة
                                </span>

                                <span class="eni">
                                    Service
                                </span>

                            </label>

                            <select
                                name="service_id"
                                id="f-svc"
                            >

                                <option value="">
                                    --
                                </option>

                                @foreach($categories->flatMap->services as $service)

                                    <option
                                        value="{{ $service->id }}"
                                        @selected(
                                            old('service_id') == $service->id
                                        )
                                    >
                                        {{ $service->title }}
                                    </option>

                                @endforeach

                            </select>

                            @error('service_id')
                            <small class="field-error">
                                {{ $message }}
                            </small>
                            @enderror

                        </div>



                        {{-- =====================================
                             MESSAGE
                        ====================================== --}}

                        <div class="fg fg-full">

                            <label for="f-msg">

                                <span class="ari">
                                    الرسالة
                                </span>

                                <span class="eni">
                                    Message
                                </span>

                                <span class="required">*</span>

                            </label>

                            <textarea
                                name="message"
                                id="f-msg"
                                placeholder="Tell me about your project..."
                                required
                            >{{ old('message') }}</textarea>

                            @error('message')
                            <small class="field-error">
                                {{ $message }}
                            </small>
                            @enderror

                        </div>



                        {{-- =====================================
                             SUBMIT
                        ====================================== --}}

                        <div class="fg-full">

                            <button
                                class="csubmit"
                                type="submit"
                            >

                                <i data-lucide="send"></i>

                                <span class="ari">
                                    إرسال الرسالة
                                </span>

                                <span class="eni">
                                    Send Message
                                </span>

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

@endif
