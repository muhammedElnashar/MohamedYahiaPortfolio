
@if($whatsappCTA =$service->ctaSection('whatsapp_cta'))
    <section style="background:linear-gradient(135deg,#0d1b2a 0%,#162436 100%);padding:4rem 0;text-align:center">
        <div style="max-width:680px;margin:0 auto;padding:0 1.5rem">
            <h2 style="font-size:1.65rem;font-weight:800;color:#fff;margin:0 0 .75rem">
                <span class="">{{ $whatsappCTA->title }}</span></h2>
            <p style="color:rgba(255,255,255,.7);margin:0 0 2rem;line-height:1.7;font-size:.95rem">
               {{ $whatsappCTA->description }}
            </p>
            <a href="{{ $whatsappCTA->button_url }}" target="_blank"
               style="display:inline-flex;align-items:center;gap:.6rem;background:#E86A1A;color:#fff;padding:.9rem 2rem;border-radius:var(--rs);font-weight:700;text-decoration:none;font-size:1rem">
                <i data-lucide="{{$whatsappCTA->icon}}" style="width:18px;height:18px;stroke:#fff;fill:none"></i>
                <span class="">{{$whatsappCTA->button_text}}</span>
            </a>
        </div>
    </section>

@endif
