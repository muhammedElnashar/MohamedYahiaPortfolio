<section class="hero" id="hero">
    <div class="gb gb1"></div>
    <div class="gb gb2"></div>
    <div class="hero-wrap">
        <div>
            <div class="eyebrow"><i data-lucide="shield-check"></i>
                <span>{{ __($hero->badge) }}</span>
            </div>
            <h1 class="ht">{{ __($hero->first_name) }} <span class="or">{{ __($hero->last_name) }}</span><br/><span
                    class="ol">{{ __($hero->position) }}</span>
                <br>
                <span>{{ __($hero->title) }}</span></h1>
            <div class="hero-role">
                {{ __($hero->hero_role) }}
            </div>
            <p class="hero-desc">
                {{ __($hero->description) }}

            </p>

            <div class="chips">

                @foreach($hero_skills as $skill)


                    <span
                        class="chip {{ $skill->is_highlighted ? 'h' : '' }}"
                    >
            {{ $skill->name }}
        </span>

                @endforeach

            </div>            <div class="hbtns">
                <a class="btn-pr" href="{{$hero->whatsapp_url}}" target="_blank"><i
                        data-lucide="message-circle"></i><span class="">Contact Now</span></a>
                <a class="btn-gh" href="{{$hero->portfolio_url}}" target="_blank"><i
                        data-lucide="briefcase"></i><span class="">Mostaql Portfolio</span></a>
            </div>
        </div>
        <div class="hcard">

            <div class="hcard-av"><img src="{{ Storage::url($hero->avatar) }}"
                                       alt="{{ $hero->card_name }}"
                                       style="width:100%;height:100%;object-fit:cover;border-radius:50%"
                                       onerror="this.style.display='none';this.parentElement.innerHTML='MY'"></div>
            <div class="hcard-name">{{$hero->card_name}}</div>
            <div class="hcard-role">{{$hero->card_role}}</div>
            <div class="hcard-status"><span class="hdot"></span><span>Available Now</span></div>
            <div class="hcard-grid">
                <div class="hcs">
                    <div class="hcsn">{{ $hero->projects_count }}+</div>
                    <div class="hcsl">Sites</div>
                </div>
                <div class="hcs">
                    <div class="hcsn">{{ $hero->years_count }}+</div>
                    <div class="hcsl ">Years</div>
                </div>
                <div class="hcs">
                    <div class="hcsn">{{ $hero->completion_count }}%</div>
                    <div class="hcsl ">Completion</div>
                </div>
                <div class="hcs">
                    <div class="hcsn">{{ $hero->rating_count }}</div>
                    <div class="hcsl ">Rating</div>
                </div>
            </div>
            <div class="mostaql-b"><i data-lucide="star"></i> <span class="">{{$hero->mostaql_projects}}+ Projects on Mostaql · {{$hero->rating_count}} ⭐</span>
            </div>

        </div>
    </div>
</section>
