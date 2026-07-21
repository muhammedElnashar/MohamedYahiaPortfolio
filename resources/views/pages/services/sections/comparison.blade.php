@php
    $sectionHeading = $service->contentSection('comparison');
@endphp
@if($sectionHeading && $service->comparisons->isNotEmpty())
    <section style="padding:3.5rem 0;background:var(--sur)">

        <div style="max-width:1120px;margin:0 auto;padding:0 1.75rem">
        <span
            style="display:inline-flex;align-items:center;gap:6px;background:rgba(232,106,26,.12);border:1px solid rgba(232,106,26,.3);border-radius:20px;padding:.3rem .85rem;font-size:.72rem;font-weight:700;color:#E86A1A;margin-bottom:1rem">
            <i data-lucide="bar-chart-2" style="width:12px;height:12px;stroke:#E86A1A"></i>
            <span class="">{{ $sectionHeading->eyebrow }}</span>
        </span>
            <h2 style="font-size:1.3rem;font-weight:800;margin:0 0 1.5rem">
                <span class="">{{ $sectionHeading->title }}</span>
            </h2>
            <div style="overflow-x:auto;border-radius:var(--r);border:1px solid var(--brd)">
                <table style="width:100%;border-collapse:collapse;font-size:.87rem">
                    <thead>
                    <tr style="background:var(--sur2)">
                        <th style="padding:.75rem 1rem;text-align:right;font-weight:700;border-bottom:2px solid var(--brd)">
                            <span class="">Feature</span></th>
                        <th style="padding:.75rem 1rem;text-align:center;font-weight:700;color:#E86A1A;border-bottom:2px solid var(--brd);white-space:nowrap">
                            <i data-lucide="user-check"
                               style="width:13px;height:13px;stroke:#E86A1A;vertical-align:middle;margin-inline-end:4px"></i>
                            <span class="">With Me</span>
                        </th>
                        <th style="padding:.75rem 1rem;text-align:center;font-weight:700;color:var(--mu);border-bottom:2px solid var(--brd);white-space:nowrap">
                            <span class="">Traditional</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($service->comparisons as $comparison)

                        <tr>

                            <td>
                                {{ $comparison->feature }}
                            </td>

                            <td style="padding:.7rem 1rem;border-bottom:1px solid var(--brd);text-align:center">
                                    @include('components.boolean-icon', [
                                        'value' => $comparison->expert_value
                                    ])
                                </td>

                            <td style="padding:.7rem 1rem;border-bottom:1px solid var(--brd);text-align:center">
                                    @include('components.boolean-icon', [
                                        'value' => $comparison->traditional_value
                                ])
                            </td>

                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

</section>
@endif
