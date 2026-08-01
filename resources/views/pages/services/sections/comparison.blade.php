@php
    $sectionHeading = $service->contentSection('comparison');
@endphp

@if($sectionHeading && $service->comparisons->isNotEmpty())

    <section class="svc-comparison">

        <div class="container">

            <div class="svc-comparison-badge">
                <i data-lucide="bar-chart-2"></i>
                {{ $sectionHeading->eyebrow }}
            </div>

            <h2 class="svc-comparison-title">
                {{ $sectionHeading->title }}
            </h2>

            <div class="svc-comparison-table">

                <table>

                    <thead>

                    <tr>

                        <th>Feature</th>

                        <th>
                            <i data-lucide="user-check"></i>
                            With Me
                        </th>

                        <th>Traditional</th>

                    </tr>

                    </thead>

                    <tbody>

                    @foreach($service->comparisons as $comparison)

                        <tr>

                            <td>
                                {{ $comparison->feature }}
                            </td>

                            <td>
                                @include('components.boolean-icon', [
                                    'value' => $comparison->expert_value
                                ])
                            </td>

                            <td>
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
