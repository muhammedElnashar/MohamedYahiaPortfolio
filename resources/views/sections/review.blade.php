@php
    $heading = $sections->get(
        \App\Enums\HomeSectionKey::REVIEWS->value
    );
@endphp


@if($reviews->isNotEmpty())

    <section id="section-reviews" class="reviews-section">

        <div class="si reviews-container">


            {{-- =========================================
                 HEADER
            ========================================== --}}

            <div class="reviews-header">

                @if($heading?->eyebrow)

                    <div class="eye">
                    <span>
                        {{ $heading->eyebrow }}
                    </span>
                    </div>

                @endif


                @if($heading?->title)

                    <h2 class="sh">
                        {{ $heading->title }}
                    </h2>

                @endif


                @if($heading?->subtitle)

                    <p class="reviews-intro">
                        {{ $heading->subtitle }}
                    </p>

                @endif

            </div>



            {{-- =========================================
                 REVIEWS
            ========================================== --}}

            <div class="reviews-grid">

                    @foreach($reviews as $review)
                    <article class="review-card">


                        {{-- =============================
                             CHAT HEADER
                        ============================== --}}

                        <div class="review-chat-header">


                            {{-- Avatar --}}

                            <div class="review-avatar">
                                {{ $review->avatar_text }}
                            </div>


                            {{-- Client --}}

                            <div class="review-client">

                                <div class="review-client-name">
                                    {{ $review->client_name }}
                                </div>


                                @if($review->client_subtitle)

                                    <div class="review-client-subtitle">
                                        {{ $review->client_subtitle }}
                                    </div>

                                @endif

                            </div>


                            {{-- Rating --}}

                            @if($review->rating)

                                <div
                                    class="review-rating"
                                    title="{{ $review->rating }}/5"
                                    aria-label="{{ $review->rating }} out of 5"
                                >

                                    @for($i = 1; $i <= 5; $i++)

                                        <span>
                                        {{ $i <= $review->rating ? '★' : '☆' }}
                                    </span>

                                    @endfor

                                </div>

                            @endif


                        </div>



                        {{-- =============================
                             MESSAGE
                        ============================== --}}

                        <div class="review-message-area">

                            <div class="review-message">

                                <p class="review-text">
                                    {{ $review->review }}
                                </p>


                                @if($review->rating_time)

                                    <div class="review-time">

                                    <span>
                                        {{ $review->rating_time }}
                                    </span>

                                        <span class="review-checks">
                                        ✓✓
                                    </span>

                                    </div>

                                @endif

                            </div>

                        </div>


                    </article>
                        @endforeach


            </div>



            {{-- =========================================
                 MOBILE SWIPE HINT
            ========================================== --}}

            @if($reviews->count() > 1)

                <div class="reviews-swipe-hint">

                    <span class="reviews-swipe-line"></span>

                    <span class="ari">
                    اسحب لعرض المزيد
                </span>

                    <span class="eni">
                    Swipe to see more
                </span>

                    <span class="reviews-swipe-line"></span>

                </div>

            @endif



            {{-- =========================================
                 MOSTAQL
            ========================================== --}}

                @if($hero->portfolio_url)
                    <div class="reviews-footer">

                        <a
                            href="{{ $hero->portfolio_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="reviews-all-link"
                        >

                    <span class="ari">
                        عرض جميع التقييمات على مستقل
                    </span>

                            <span class="eni">
                        View all reviews on Mostaql
                    </span>

                            <span class="reviews-link-arrow">
                        ←
                    </span>

                        </a>

                    </div>

                @endif



        </div>

    </section>

@endif
