@php
        $heading = $sections->get(\App\Enums\HomeSectionKey::FAQ->value);
@endphp
@if($faqs->isNotEmpty())
    <section id="section-faq" style="padding:5rem 0;background:var(--bg);border-top:1px solid var(--brd)">
        <div class="si">
            <p style="text-align:center;font-size:.75rem;letter-spacing:.13em;font-weight:700;color:var(--or);text-transform:uppercase;margin-bottom:.5rem">
                {{$heading?->eyebrow}}</p>
            <h2 class="sh">{{$heading?->title}}</h2>

            <div style="max-width:780px;margin:2.5rem auto 0">
                @foreach($faqs as $faq)
                    <details>
                        <summary>
                            <span class="">{{$faq->question}}</span>
                        </summary>
                        <div class="faq-ans">
                            <span class="">{{$faq->answer}}</span></div>
                    </details>

                @endforeach




            </div>

            <div style="text-align:center;margin-top:2.5rem">
                <a href="#contact" onclick="setTimeout(()=>document.getElementById('contact').scrollIntoView({behavior:'smooth'}),100)" style="display:inline-block;background:var(--or);color:#fff;font-weight:700;font-size:.9rem;padding:.85rem 2.2rem;border-radius:var(--r);text-decoration:none">
                    <span class="">Have another question? Contact me ←</span>
                </a>
            </div>
        </div>
    </section>

@endif

