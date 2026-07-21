@if($section = $service->section('hero'))
    <div class="spage-stats">

        <div class="spage-stats">

            @foreach($section->stats as $stat)

                <div class="sps">

                    <div class="spsn">
                        {{ $stat->value }}
                    </div>

                    <div class="spsl">
                        {{ $stat->label }}
                    </div>

                </div>

            @endforeach

        </div>

</div>
@endif
