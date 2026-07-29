<x-filament-widgets::widget>

    <x-filament::section>

        {{-- Header --}}
        <x-slot name="heading">
            <div style="
                display:flex;
                align-items:center;
                gap:10px;
            ">
                <span>Needs Attention</span>

                <x-filament::badge color="danger" size="sm">
                    {{ $this->getTotalAffected() }}
                </x-filament::badge>
            </div>
        </x-slot>

        <x-slot name="description">
            Review content that requires updates
        </x-slot>


        @php
            $items = $this->getIssues();
        @endphp


        @if($items->isEmpty())

            {{-- Empty State --}}
            <div style="
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
                text-align:center;
                padding:42px 20px;
            ">

                <div style="
                    width:48px;
                    height:48px;
                    border-radius:14px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    background:rgba(34,197,94,.10);
                    margin-bottom:14px;
                ">
                    <x-filament::icon
                        icon="heroicon-o-check-circle"
                        style="
                            width:24px;
                            height:24px;
                            color:rgb(34,197,94);
                        "
                    />
                </div>

                <div style="
                    font-size:14px;
                    font-weight:600;
                ">
                    Everything looks good
                </div>

                <div style="
                    margin-top:4px;
                    font-size:12px;
                    opacity:.6;
                ">
                    No content issues require your attention.
                </div>

            </div>

        @else

            <div style="
                display:flex;
                flex-direction:column;
                gap:12px;
            ">

                @foreach($items as $item)

                    @php
                        $seo = $item['seo_count'] ?? 0;
                        $translation = $item['translation_count'] ?? 0;
                        $media = $item['media_count'] ?? 0;

                        $url = $this->getEditUrl($item);

                        $typeColor = match($item['type']) {
                            'Blog' => 'success',
                            'Service' => 'info',
                            'Platform' => 'warning',
                            default => 'gray',
                        };

                        $typeIcon = match($item['type']) {
                            'Blog' => 'heroicon-o-document-text',
                            'Service' => 'heroicon-o-briefcase',
                            'Platform' => 'heroicon-o-squares-2x2',
                            default => 'heroicon-o-document',
                        };
                    @endphp


                    {{-- Record --}}
                    <div style="
                        border:1px solid rgba(128,128,128,.20);
                        border-radius:14px;
                        padding:16px;
                    ">

                        {{-- Main Row --}}
                        <div style="
                            display:flex;
                            align-items:flex-start;
                            gap:12px;
                        ">

                            {{-- Icon --}}
                            <div style="
                                width:40px;
                                height:40px;
                                min-width:40px;
                                border-radius:10px;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                background:rgba(128,128,128,.08);
                            ">

                                <x-filament::icon
                                    :icon="$typeIcon"
                                    style="
                                        width:20px;
                                        height:20px;
                                        opacity:.65;
                                    "
                                />

                            </div>


                            {{-- Content --}}
                            <div style="
                                flex:1;
                                min-width:0;
                            ">

                                {{-- Title + Type --}}
                                <div style="
                                    display:flex;
                                    align-items:center;
                                    flex-wrap:wrap;
                                    gap:7px;
                                ">

                                    <div style="
                                        font-size:14px;
                                        line-height:20px;
                                        font-weight:600;
                                        overflow:hidden;
                                        text-overflow:ellipsis;
                                        white-space:nowrap;
                                        max-width:100%;
                                    ">
                                        {{ $item['title'] }}
                                    </div>

                                    <x-filament::badge
                                        :color="$typeColor"
                                        size="sm"
                                    >
                                        {{ $item['type'] }}
                                    </x-filament::badge>

                                </div>


                                {{-- Issue count --}}
                                <div style="
                                    margin-top:4px;
                                    font-size:12px;
                                    opacity:.55;
                                ">
                                    {{ $item['issues_count'] }}

                                    {{ $item['issues_count'] === 1
                                        ? 'issue requires attention'
                                        : 'issues require attention'
                                    }}
                                </div>

                            </div>


                            {{-- Total --}}
                            <div style="
                                width:30px;
                                height:30px;
                                min-width:30px;
                                border-radius:50%;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                background:rgba(239,68,68,.10);
                                color:rgb(220,38,38);
                                font-size:12px;
                                font-weight:700;
                            ">
                                {{ $item['issues_count'] }}
                            </div>

                        </div>


                        {{-- Issue Categories --}}
                        <div style="
                            display:flex;
                            align-items:center;
                            flex-wrap:wrap;
                            gap:7px;
                            margin-top:14px;
                            padding-top:12px;
                            border-top:1px solid rgba(128,128,128,.15);
                        ">

                            @if($seo > 0)

                                <x-filament::badge
                                    color="danger"
                                    size="sm"
                                >
                                    {{ $seo }} SEO
                                </x-filament::badge>

                            @endif


                            @if($translation > 0)

                                <x-filament::badge
                                    color="warning"
                                    size="sm"
                                >
                                    {{ $translation }} Translation
                                </x-filament::badge>

                            @endif


                                @if($media > 0)
                                <x-filament::badge
                                    color="info"
                                    size="sm"
                                >
                                    {{ $media }} Media
                                </x-filament::badge>
                                @endif



                            {{-- Edit --}}
                            @if($url)

                                <div style="
                                    margin-inline-start:auto;
                                ">

                                    <x-filament::button
                                        :href="$url"
                                        tag="a"
                                        color="gray"
                                        size="xs"
                                        icon="heroicon-m-pencil-square"
                                    >
                                        Review
                                    </x-filament::button>

                                </div>

                            @endif

                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </x-filament::section>

</x-filament-widgets::widget>
