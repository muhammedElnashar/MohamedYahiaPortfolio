
        @php
            $section = $service->contentSection('signs_you_need_this');
        @endphp
        @if($section && $service->painPoints->isNotEmpty())
            <div class="eye"><span>{{$section->eyebrow}}</span></div>
            <h2 class="sh">
                <span class="">{{$section->title}} </span>
            </h2>

        <div class="warn-grid">
            @foreach($service->painPoints as $painPoint)
                <div class="warn-card">
                    <div class="warn-icon"><i data-lucide="{{$painPoint->icon}}"></i></div>
                    <div class="warn-txt">
                        <span class="">{{$painPoint->title}}</span>
                    </div>
                </div>
            @endforeach

        </div>

        @endif
