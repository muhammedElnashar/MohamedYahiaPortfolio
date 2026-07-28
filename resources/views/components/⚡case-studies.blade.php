<?php

use App\Models\CaseStudy;
use App\Models\CaseStudySectionSetting;
use App\Models\HomeSection;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public ?CaseStudy $selected = null;

    public bool $showModal = false;


    public function render()
    {

        // نجلب البيانات هنا لكي تعمل الـ Pagination بشكل صحيح
        $caseStudies = CaseStudy::with([
            'growths' => fn($q) => $q->orderBy('sort_order'),
            'improvements' => fn($q) => $q->orderBy('sort_order'),
        ])
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->paginate(8);
            $setting= CaseStudySectionSetting::query()
        ->where('is_active', true)->first();
        $heading = HomeSection::where('section_key', \App\Enums\HomeSectionKey::RESULTS)->first();

        return view('components.⚡case-studies', compact('caseStudies', 'heading','setting'));
       }

    public function open(int $id)
    {
        // نجلب المشروع مباشرة من قاعدة البيانات
        $this->selected = CaseStudy::with([
            'growths' => fn($q) => $q->orderBy('sort_order'),
            'improvements' => fn($q) => $q->orderBy('sort_order'),
        ])->find($id);

        $this->showModal = true;
    }

    public function close()
    {
        $this->showModal = false;

        $this->selected = null;
    }
};
?>


<section id="cases" style="padding:5rem 0;background:var(--bg2)">
    <div style="max-width:1160px;margin:0 auto;padding:0 1.75rem">

        <!-- Header -->
        <div style="text-align:center;margin-bottom:3rem">
            <div class="eye" style="justify-content:center;margin-bottom:1rem">
                <span class="">{{$heading?->eyebrow}}</span>
            </div>
            <h2 class="sh" style="margin-bottom:.75rem">
                {{$heading?->title}}
            </h2>
            <p style="color:var(--mu);font-size:15px;max-width:620px;margin:0 auto;line-height:1.9">{{$heading?->subtitle}}</p>
            <!-- Trust bar -->
            <div style="display:flex;align-items:center;justify-content:center;gap:2rem;margin-top:1.5rem;flex-wrap:wrap">

            @if($setting)

                <div style="display:flex;align-items:center;gap:.45rem;font-size:13px;color:var(--mu)">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span class="">{{$setting?->text_1}}</span>
                </div>
                <div style="display:flex;align-items:center;gap:.45rem;font-size:13px;color:var(--mu)">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 8v4l3 3"/>
                    </svg>
                    <span class="">{{$setting?->text_2}}</span></div>
                <div style="display:flex;align-items:center;gap:.45rem;font-size:13px;color:var(--mu)">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--or)" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <span class="">{{$setting?->text_3}}</span></div>
                @endif

            </div>
        </div>
        @if($caseStudies->isNotEmpty())
            <div id="cs2-grid" style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:2.5rem">
                @foreach($caseStudies as $case)
                    <div
                        class="cs2-card"
                        wire:click="open({{ $case->id }})"
                        style="cursor:pointer"
                    >
                        <div class="cs2-img-wrap">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($case->image)}}" alt="اسم النيتش">
                            <div class="cs2-hover-overlay"><span>View Details </span></div>
                        </div>

                        <div class="cs2-gsc-boxes">
                            <div class="cs2-gsc-box"
                                 style="background:rgba(59,130,246,.1);border:1px solid rgba(59,130,246,.25)">
                                <div class="cs2-gsc-lbl" style="color:#93c5fd">CLicks</div>
                                <div class="cs2-gsc-val" style="color:#3B82F6">{{$case->clicks}}K</div>
                            </div>
                            <div class="cs2-gsc-box"
                                 style="background:rgba(139,92,246,.1);border:1px solid rgba(139,92,246,.25)">
                                <div class="cs2-gsc-lbl" style="color:#c4b5fd">Impressions</div>
                                <div class="cs2-gsc-val" style="color:#8B5CF6">{{$case->impressions}}K</div>
                            </div>
                            <div class="cs2-gsc-box"
                                 style="background:rgba(16,185,129,.1);border:1px solid rgba(16,185,129,.25)">
                                <div class="cs2-gsc-lbl" style="color:#6ee7b7">CTR</div>
                                <div class="cs2-gsc-val" style="color:#10B981">{{$case->ctr}}%</div>
                            </div>
                            <div class="cs2-gsc-box"
                                 style="background:rgba(232,106,26,.1);border:1px solid rgba(232,106,26,.25)">
                                <div class="cs2-gsc-lbl" style="color:#fdba74">Avg. Position</div>
                                <div class="cs2-gsc-val" style="color:var(--or)">{{$case->position}}</div>
                            </div>
                        </div>

                        <div class="cs2-card-body">
                            <div class="cs2-card-metric" style="color:#3B82F6"> {{$case->metric}}</div>
                            <div class="cs2-card-mlabel">{{$case->title}}</div>
                            <div class="cs2-card-niche">{{$case->niche}}</div>
                            <div class="cs2-card-tags">
                                <span class="cs2-card-tag"> 📅 {{$case->period}} </span>
                                <span class="cs2-card-tag">🌐 {{$case->industry}}</span>
                                <span class="cs2-card-tag">📈 {{$case->focus}}</span>
                            </div>
                            <button class="cs2-vd-btn">View Details ←</button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Controls -->
            <div style="display:flex;align-items:center;justify-content:center;gap:1rem;margin-bottom:3rem">
                <!-- زر السابق -->
                <button wire:click="previousPage"
                        class="cs2-navbtn" {{ $caseStudies->onFirstPage() ? 'disabled' : '' }}>
                    &#8249;
                </button>

                <!-- النقاط (Dots) -->
                <div id="cs2-dots" style="display:flex;gap:8px;align-items:center">
                    @for ($i = 1; $i <= $caseStudies->lastPage(); $i++)
                        <button
                            wire:click="gotoPage({{ $i }})"
                            style="width:10px;height:10px;border-radius:50%;border:none;cursor:pointer;background:{{ $caseStudies->currentPage() == $i ? '#3B82F6' : '#444' }};transition:all .3s"
                        ></button>
                    @endfor
                </div>

                <!-- زر التالي -->
                <button wire:click="nextPage" class="cs2-navbtn" {{ $caseStudies->hasMorePages() ? '' : 'disabled' }}>
                    &#8250;
                </button>
            </div>
        @endif

        @if($setting)
            <!-- CTA Strip -->
            <div
                style="background:linear-gradient(135deg,rgba(232,106,26,.12),rgba(232,106,26,.05));border:1.5px solid rgba(232,106,26,.35);border-radius:20px;padding:2.25rem 2.5rem;display:flex;align-items:center;justify-content:space-between;gap:2rem;flex-wrap:wrap">
                <div style="display:flex;align-items:flex-start;gap:1.25rem">
                    <div
                        style="width:52px;height:52px;background:rgba(232,106,26,.2);border-radius:14px;display:flex;align-items:center;justify-content:center;flex-shrink:0">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--or)" stroke-width="2">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                            <polyline points="17 6 23 6 23 12"/>
                        </svg>
                    </div>
                    <div>
                        <div style="font-size:1.2rem;font-weight:900;color:var(--txt);margin-bottom:.35rem"><span class="">{{$setting->title}}</span>
                        </div>
                        <div style="font-size:14px;color:var(--mu);line-height:1.7">
                        <span
                            class="">{{$setting->description}}</span>
                        </div>
                        <div style="display:flex;flex-wrap:wrap;gap:.5rem;margin-top:.75rem">
                        <span
                            style="font-size:11px;background:rgba(16,185,129,.12);color:#10B981;border:1px solid rgba(16,185,129,.3);padding:3px 10px;border-radius:20px"><span
                                class="">✓{{$setting->text_4}}</span></span>
                            <span
                                style="font-size:11px;background:rgba(59,130,246,.12);color:#3B82F6;border:1px solid rgba(59,130,246,.3);padding:3px 10px;border-radius:20px"><span class="">✓ {{$setting->text_5}}</span></span>
                            <span
                                style="font-size:11px;background:rgba(232,106,26,.12);color:var(--or);border:1px solid rgba(232,106,26,.3);padding:3px 10px;border-radius:20px"><span
                                    class="">✓ {{$setting->text_6}}</span></span>
                        </div>
                    </div>
                </div>
                <button onclick="sc('contact')"
                        style="background:var(--or);color:#fff;border:none;border-radius:12px;padding:1rem 2.25rem;font-size:15px;font-weight:800;cursor:pointer;white-space:nowrap;font-family:inherit;transition:all .2s;box-shadow:0 8px 25px rgba(232,106,26,.4)"
                        onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 12px 35px rgba(232,106,26,.55)'"
                        onmouseout="this.style.transform='';this.style.boxShadow='0 8px 25px rgba(232,106,26,.4)'">
                    <span class="eni">{{$setting->button_text}}</span>
                </button>
            </div>
        @endif

    </div>

    @if($showModal && $selected)
        <div
            id="cs2-overlay"
            wire:click="close"
            style="
        position:fixed;
        inset:0;
        background:rgba(0,0,0,.82);
        display:{{ $showModal ? 'flex' : 'none' }};
        align-items:center;
        justify-content:center;
        z-index:3000;
        padding:1rem;
    "
        >

            <div id="cs2-modal" wire:click.stop
                 style="background:var(--sur);border:1px solid var(--brd);border-radius:18px;max-width:920px;width:100%;max-height:92vh;overflow-y:auto;position:relative">

                <!-- Sticky Header -->
                <div
                    style="padding:1.25rem 1.5rem;border-bottom:1px solid var(--brd);display:flex;align-items:center;justify-content:space-between;gap:1rem;position:sticky;top:0;background:var(--sur);z-index:1;border-radius:18px 18px 0 0">
                    <div style="display:flex;align-items:center;gap:.85rem">
                        <div
                            style="width:42px;height:42px;background:rgba(232,106,26,.15);border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--or)"
                                 stroke-width="2">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                                <polyline points="17 6 23 6 23 12"/>
                            </svg>
                        </div>
                        <div>
                            <div id="cs2-m-metric"
                                 style="font-size:1.3rem;font-weight:900;color:var(--or);line-height:1.2">{{$selected->metric}} {{$selected->title}}</div>
                            <div id="cs2-m-sub" style="font-size:12px;color:var(--mu);margin-top:2px">
                                📅 {{$selected->period}}</div>
                        </div>
                    </div>
                    <div style="display:flex;align-items:center;gap:.75rem">
                        <div id="cs2-m-niche"
                             style="font-size:12px;font-weight:700;color:var(--mu);background:var(--bg3);border:1px solid var(--brd);padding:5px 14px;border-radius:20px">
                            {{$selected->industry}}</div>

                        <button wire:click="close"
                                style="background:var(--bg3);border:1px solid var(--brd);color:var(--mu);width:34px;height:34px;border-radius:50%;cursor:pointer;font-size:20px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-family:inherit">
                            &times;
                        </button>
                    </div>
                </div>

                <div style="padding:1.5rem">
                    <!-- Screenshot -->
                    <img id="cs2-m-img" src="{{\Illuminate\Support\Facades\Storage::url($selected->image)}}" alt=""
                         style="width:100%;border-radius:12px;border:1px solid var(--brd);display:block;background:var(--bg3);object-fit:cover;max-height:280px;margin-bottom:1.25rem">

                    <!-- GSC Metric Boxes -->
                    <div id="cs2-m-boxes"
                         style="display:grid;grid-template-columns:repeat(4,1fr);gap:10px;margin-bottom:1.5rem">
                        <div class="cs2-gsc-box"
                             style="background:rgba(59,130,246,.1);border:1px solid rgba(59,130,246,.3);border-radius:10px;padding:12px">
                            <div class="cs2-gsc-lbl" style="color:#93c5fd;font-size:10px;margin-bottom:6px">Total
                                Clicks
                            </div>
                            <div class="cs2-gsc-val" style="color:#3B82F6;font-size:1.15rem">{{$selected->clicks}}K
                            </div>
                        </div>
                        <div class="cs2-gsc-box"
                             style="background:rgba(139,92,246,.1);border:1px solid rgba(139,92,246,.3);border-radius:10px;padding:12px">
                            <div class="cs2-gsc-lbl" style="color:#c4b5fd;font-size:10px;margin-bottom:6px">Total
                                Impressions
                            </div>
                            <div class="cs2-gsc-val" style="color:#8B5CF6;font-size:1.15rem">{{$selected->impressions}}K
                            </div>
                        </div>
                        <div class="cs2-gsc-box"
                             style="background:rgba(16,185,129,.1);border:1px solid rgba(16,185,129,.3);border-radius:10px;padding:12px">
                            <div class="cs2-gsc-lbl" style="color:#6ee7b7;font-size:10px;margin-bottom:6px">Average
                                CTR
                            </div>
                            <div class="cs2-gsc-val" style="color:#10B981;font-size:1.15rem">{{$selected->ctr}}%</div>
                        </div>
                        <div class="cs2-gsc-box"
                             style="background:rgba(232,106,26,.1);border:1px solid rgba(232,106,26,.3);border-radius:10px;padding:12px">
                            <div class="cs2-gsc-lbl" style="color:#fdba74;font-size:10px;margin-bottom:6px">Avg.
                                Position
                            </div>
                            <div class="cs2-gsc-val"
                                 style="color:var(--or);font-size:1.15rem">{{$selected->position}}</div>
                        </div>
                    </div>

                    <!-- Growth Summary - 4 cols row -->
                    <div style="margin-bottom:1.25rem">
                        <div
                            style="font-size:11px;font-weight:800;letter-spacing:1.5px;text-transform:uppercase;color:var(--mu);margin-bottom:.75rem">
                            Growth Summary
                        </div>
                        <div id="cs2-m-growth" style="display:grid;grid-template-columns:repeat(4,1fr);gap:10px">
                            @foreach($selected->growths as $growth)
                                <div class="cs2-gm-box">
                                    <div class="cs2-gm-icon">
                                        <i data-lucide="{{$growth->icon}}"></i>
                                    </div>
                                    <div class="cs2-gm-val">{{$growth->value}}</div>
                                    <div class="cs2-gm-lbl">{{$growth->title}}</div>
                                </div>

                            @endforeach

                        </div>
                    </div>

                    <!-- What I Improved - 4 cols row -->
                    <div style="margin-bottom:1.5rem">
                        <div
                            style="font-size:11px;font-weight:800;letter-spacing:1.5px;text-transform:uppercase;color:var(--mu);margin-bottom:.75rem">
                            What I Improved
                        </div>
                        <div id="cs2-m-improved" style="display:grid;grid-template-columns:repeat(4,1fr);gap:10px">
                            @foreach($selected->improvements as $improvement)

                                <div class="cs2-imp-box">
                                    <div class="cs2-imp-icon">
                                        <i data-lucide="{{$improvement->icon}}"></i>
                                    </div>
                                    <div class="cs2-imp-title">{{$improvement->title}}</div>
                                    <div class="cs2-imp-desc">{{$improvement->description}}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Bottom 3 cols -->
                    <div id="cs2-m-body"
                         style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;border-top:1px solid var(--brd);padding-top:1.25rem">
                        <div class="cs2-det-box">
                            <div class="cs2-det-title" style="color:#F59E0B">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="12" y1="8" x2="12" y2="12"/>
                                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                                </svg>
                                The Challenge
                            </div>
                            <p class="cs2-det-p">{{$selected->challenge}}</p>
                        </div>
                        <div class="cs2-det-box">
                            <div class="cs2-det-title" style="color:#3B82F6">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                What I Did
                            </div>
                            <p class="cs2-det-p">{{$selected->solution}}</p>
                        </div>
                        <div class="cs2-det-box"
                             style="border-color:rgba(232,106,26,.3);background:rgba(232,106,26,.06)">
                            <div class="cs2-det-title" style="color:var(--or)">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="7"/>
                                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                                </svg>
                                The Outcome
                            </div>
                            <p class="cs2-det-p" style="font-weight:700;color:var(--txt)">{{$selected->result}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif

</section>



