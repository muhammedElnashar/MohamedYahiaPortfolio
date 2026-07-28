@php
    $heading = $sections->get(\App\Enums\HomeSectionKey::CONTACT->value);
@endphp
@if($info)

<section id="contact" class="contact-bg">
    <div class="si">
        <div class="eye"><span class="">{{$heading?->eyebrow}}</span></div>
        <h2 class="sh">{{$heading?->title}}</h2>
        <div class="contact-wrap">
                <div class="ci">
                    <h3>{{$info?->name}}</h3>
                    <p class="">{{$info?->description}}</p>
                    <div class="citem"><div class="citem-ico"><i data-lucide="message-circle"></i></div><div><div style="font-weight:700;color:var(--txt)">WhatsApp</div><a href="https://wa.me/{{$info->whatsapp}}">+{{$info->whatsapp}}</a></div></div>
                    <div class="citem"><div class="citem-ico"><i data-lucide="mail"></i></div><div><div style="font-weight:700;color:var(--txt)">Email</div><a href="mailto:{{$info->email}}">{{$info->email}}</a></div></div>
                    <div class="citem"><div class="citem-ico"><i data-lucide="link"></i></div><div><div style="font-weight:700;color:var(--txt)">LinkedIn</div><a href="{{$info->linkedin_url}}" target="_blank">{{$info->linkedin_label}}</a></div></div>
                    <div class="citem"><div class="citem-ico"><i data-lucide="briefcase"></i></div><div><div style="font-weight:700;color:var(--txt)">Mostaql</div><a href="{{$info->mostaql_url}}" target="_blank">{{$info->mostaql_label}}</a></div></div>
                    <div class="citem"><div class="citem-ico"><i data-lucide="map-pin"></i></div><div><div style="font-weight:700;color:var(--txt)"><span class="">Location</span></div><span class="">{{$info->location}}</span></div></div>
                    <div class="cfree"><strong> <span class="">{{$info->consultation_title}}</span></strong><p class="">{{$info->consultation_description}}</p></div>
                    <div class="social-row">
                        <a class="sbtn" href="https://wa.me/{{$info->whatsapp}}" target="_blank"><i data-lucide="message-circle"></i></a>
                        <a class="sbtn" href="{{$info->linkedin_url}}" target="_blank"><i data-lucide="link"></i></a>
                        <a class="sbtn" href="{{$info->mostaql_url}}" target="_blank"><i data-lucide="briefcase"></i></a>
                        <a class="sbtn" href="{{$info->email}}"><i data-lucide="mail"></i></a>
                    </div>
                </div>

            <div class="cform">

                <div class="cform-title">
                    <span class="">Send a Direct Message</span>
                </div>

                @if(session('contact_success'))
                    <div class="contact-success">
                        {{ session('contact_success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store',app()->currentLocale()) }}" method="POST">

                    @csrf

                    {{-- Name --}}
                    <div class="fg">

                        <label>
                            <span class="">Your Name</span>
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="f-name"
                            value="{{ old('name') }}"
                            placeholder="Mohamed Ahmed"
                            required
                        />

                        @error('name')
                        <small style="color:#ef4444">
                            {{ $message }}
                        </small>
                        @enderror

                    </div>

                    {{-- Website --}}
                    <div class="fg">

                        <label>
                            <span class="">Your Website</span>
                        </label>

                        <input
                            type="url"
                            name="website"
                            id="f-site"
                            value="{{ old('website') }}"
                            placeholder="https://yoursite.com"
                        />

                        @error('website')
                        <small style="color:#ef4444">
                            {{ $message }}
                        </small>
                        @enderror

                    </div>

                    {{-- Service --}}
                    <div class="fg">

                        <label>
                            <span class="">Service</span>
                        </label>

                        <select name="service_id" id="f-svc">

                            <option value="">--</option>

                            @foreach($categories->flatMap->services as $service)
                                <option
                                    value="{{ $service->id }}"
                                    @selected(old('service_id') == $service->id)
                                >
                                    {{ $service->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('service_id')
                        <small style="color:#ef4444">
                            {{ $message }}
                        </small>
                        @enderror

                    </div>
                    <div class="fg">
                        <label>
                            <span class="ari">البريد الإلكتروني</span>
                            <span class="eni">Email</span>
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="name@example.com"
                        />
                    </div>

                    <div class="fg">
                        <label>
                            <span class="ari">رقم الهاتف</span>
                            <span class="eni">Phone</span>
                        </label>

                        <input
                            type="tel"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="+966..."
                        />
                    </div>
                    {{-- Message --}}
                    <div class="fg">

                        <label>
                            <span class="">Message</span>
                        </label>

                        <textarea
                            name="message"
                            id="f-msg"
                            placeholder="Tell me about your project..."
                            required
                        >{{ old('message') }}</textarea>

                        @error('message')
                        <small style="color:#ef4444">
                            {{ $message }}
                        </small>
                        @enderror

                    </div>


                    <button class="csubmit" type="submit">

                        <i data-lucide="send"></i>



                        <span class="">
                Send Message
            </span>

                    </button>

                </form>

            </div>
        </div>
    </div>
</section>
@endif
