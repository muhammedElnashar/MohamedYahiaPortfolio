@php
    $sectionHeading = $service->contentSection('deliverable');
@endphp
@if($sectionHeading && $service->deliverables->isNotEmpty())

    <div>
        <div class="spage-st"><span class="">{{ $sectionHeading->title }}</span>
        </div>

        <ul class="spage-list ">
            @foreach($service->deliverables as $deliverable)
                <li>
                    <i data-lucide="{{$deliverable->icon}}"></i><span>{{ $deliverable->title }}</span>
                </li>
            @endforeach
        </ul>
    </div>

@endif
