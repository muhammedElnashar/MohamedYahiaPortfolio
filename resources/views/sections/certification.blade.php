@php
    $heading = $sections->get(\App\Enums\HomeSectionKey::CERTIFICATIONS->value);
@endphp
@if($certifications)
    <section id="section-certs" style="padding:4rem 0; text-align: center; border-top:1px solid var(--brd);overflow:hidden">
        <div class="si">
            <div class="eye" ><span class="">{{$heading?->eyebrow}}</span></div>
            <h2 class="sh">{{$heading?->title}}</h2>

            <p style="font-size:.95rem;color:var(--mu);line-height:1.8;margin-bottom:2.5rem;max-width:640px;margin-left:auto;margin-right:auto">
                <span class=""> {{$heading?->subtitle}}</span></p>

            <!-- Stats Strip -->
            @if($certifications->stats->isNotEmpty())
                <div style="display:flex;justify-content:center;gap:2rem;flex-wrap:wrap;margin-bottom:2.5rem">
                    @foreach($certifications->stats as $statistic)
                        <div style="text-align:center">
                            <div style="font-size:2rem;font-weight:900;color:var(--or)">{{$statistic->value}}+</div>
                            <div style="font-size:.8rem;color:var(--mu)"><span class="">{{$statistic->label}}</span></div></div>
                    @endforeach


                </div>
            @endif

            @if($certifications->highlights->isNotEmpty())
                <!-- Slider Wrapper -->
                <div class="certs-slider-wrap" style="position:relative">
                    <!-- Prev/Next Buttons -->
                    <button id="certs-prev" onclick="certsPrev()" aria-label="Previous" style="position:absolute;left:0;top:50%;transform:translateY(-50%);z-index:10;width:40px;height:40px;border-radius:50%;background:var(--sur);border:1px solid var(--brd);cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--txt);transition:.2s" onmouseover="this.style.background='var(--or)';this.style.color='#fff'" onmouseout="this.style.background='var(--sur)';this.style.color='var(--txt)'">&#8249;</button>
                    <button id="certs-next" onclick="certsNext()" aria-label="Next" style="position:absolute;right:0;top:50%;transform:translateY(-50%);z-index:10;width:40px;height:40px;border-radius:50%;background:var(--sur);border:1px solid var(--brd);cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--txt);transition:.2s" onmouseover="this.style.background='var(--or)';this.style.color='#fff'" onmouseout="this.style.background='var(--sur)';this.style.color='var(--txt)'">&#8250;</button>

                    <!-- Track -->
                    <div id="certs-track-outer" style="overflow:hidden;margin:0 52px">
                        <div id="certs-track" style="display:flex;gap:1.25rem;transition:transform .45s cubic-bezier(.4,0,.2,1)">
                            @foreach($certifications->highlights as $highlight)
                                <div class="cert-slide" style="min-width:220px;background:var(--sur);border:1px solid var(--brd);border-radius:var(--r);padding:1.25rem;flex-shrink:0">
                                    <div style="font-size:.65rem;font-weight:700;color:var(--or);text-transform:uppercase;letter-spacing:.8px;margin-bottom:.5rem">
                                        {{$highlight->platform}}</div>
                                    <div style="font-size:.9rem;font-weight:700;color:var(--txt);margin-bottom:.4rem"><span class="">{{$highlight->title}}</span></div>
                                    <div style="font-size:.78rem;color:var(--mu)"><span class="">{{$highlight->subtitle}}</span></div>
                                </div>

                            @endforeach



                        </div><!-- end track -->
                    </div><!-- end track outer -->
                </div><!-- end slider wrap -->

                <!-- Dots -->
                <div id="certs-dots" style="display:flex;justify-content:center;gap:.5rem;margin-top:1.25rem"></div>
            @endif

        </div>



        <!-- LinkedIn CTA -->
        <div style="text-align:center;margin:1.5rem 0 0">
            <a href="{{$certifications->linkedin_url}}" target="_blank"
               style="display:inline-flex;align-items:center;gap:.55rem;background:#0A66C2;color:#fff;padding:.6rem 1.4rem;border-radius:var(--rs);font-weight:700;text-decoration:none;font-size:.88rem"
               onmouseover="this.style.opacity='.85'" onmouseout="this.style.opacity='1'">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="white"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                <span class="">{{$certifications->linkedin_button_text}}</span>
            </a>
        </div>
        @if($certifications->certificates->isNotEmpty())
            <!-- Cert Images Slider -->
            <div style="margin-top:2.5rem;position:relative">
                <div id="cert-imgs-track" style="display:flex;overflow-x:auto;scroll-snap-type:x mandatory;scrollbar-width:none;-ms-overflow-style:none;padding-bottom:4px">
                    <div class="cert-img-slide" style="flex:0 0 340px;padding:0 8px">
                        <img
                            alt="شهادة 1" style="width:100%;height:220px;object-fit:cover;border-radius:12px;border:1px solid var(--brd);cursor:pointer" onclick="this.requestFullscreen&&this.requestFullscreen()">
                    </div>

                </div>
                <div style="text-align:center;margin-top:1rem;display:flex;justify-content:center;align-items:center;gap:10px">
                    <button onclick="document.getElementById('cert-imgs-track').scrollBy({left:356,behavior:'smooth'})" style="background:var(--or);border:none;color:#fff;width:32px;height:32px;border-radius:50%;cursor:pointer;font-size:1rem">&#8592;</button>
                    <span style="font-size:.78rem;color:var(--mu)">{{$certifications->gallery_hint}}</span>
                    <button onclick="document.getElementById('cert-imgs-track').scrollBy({left:-356,behavior:'smooth'})" style="background:var(--or);border:none;color:#fff;width:32px;height:32px;border-radius:50%;cursor:pointer;font-size:1rem">&#8594;</button>
                </div>
            </div>
            <style>#cert-imgs-track::-webkit-scrollbar{display:none}.cert-img-slide{scroll-snap-align:start}</style>
        @endif
    </section>

@endif
<script>
    (function(){
        var track = document.getElementById('certs-track');
        var dotsWrap = document.getElementById('certs-dots');
        if (!track || !dotsWrap) return;
        var slides = track.querySelectorAll('.cert-slide');
        var slideWidth = 220 + 20; // minWidth + gap
        var visibleCount = Math.max(1, Math.floor(document.getElementById('certs-track-outer').offsetWidth / slideWidth));
        var total = slides.length;
        var maxIdx = Math.max(0, total - visibleCount);
        var current = 0;
        var autoTimer;

        // Build dots
        var dotCount = Math.ceil(total / visibleCount);
        for(var i=0;i<dotCount;i++){
            var d = document.createElement('button');
            d.style.cssText = 'width:8px;height:8px;border-radius:50%;border:none;cursor:pointer;background:var(--brd);transition:.2s;padding:0';
            d.setAttribute('data-idx', i);
            d.onclick = (function(idx){ return function(){ goTo(idx * visibleCount); }; })(i);
            dotsWrap.appendChild(d);
        }
        function updateDots(){
            var activeDot = Math.floor(current / visibleCount);
            dotsWrap.querySelectorAll('button').forEach(function(d,i){
                d.style.background = i === activeDot ? 'var(--or)' : 'var(--brd)';
                d.style.width = i === activeDot ? '20px' : '8px';
                d.style.borderRadius = '4px';
            });
        }
        function goTo(idx) {
            current = Math.max(0, Math.min(idx, maxIdx));

            var isRTL =
                document.documentElement.dir === 'rtl';

            var offset =
                current * slideWidth * (isRTL ? 1 : -1);

            track.style.transform =
                'translateX(' + offset + 'px)';

            updateDots();
        }
        window.certsNext = function(){ goTo(current + 1); resetAuto(); };
        window.certsPrev = function(){ goTo(current - 1); resetAuto(); };
        function resetAuto(){ clearInterval(autoTimer); autoTimer = setInterval(function(){ goTo(current < maxIdx ? current + 1 : 0); }, 7000); }
        updateDots();
        resetAuto();
        window.addEventListener('resize', function(){
            visibleCount = Math.max(1, Math.floor(document.getElementById('certs-track-outer').offsetWidth / slideWidth));
            maxIdx = Math.max(0, total - visibleCount);
            goTo(0);
        });
    })();
</script>
