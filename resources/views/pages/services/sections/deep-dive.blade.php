@php
    $section2 = $service->contentSection('deep_dive');
@endphp
@if($section2)
    <div class="svc-new-section " style="margin-bottom:10rem;margin-top: 10rem" >

    <div class="eye"><span class="">{{$section2->eyebrow}}</span></div>
    <h2 class="sh"><span class="">{{$section2->title}} </span></h2>
    <div style="max-width:820px;line-height:2;font-size:15px;color:var(--mu)">
        <p class="svc-expl-p ">{!! $section2->content !!}</p>

    </div>


</div>
@endif
