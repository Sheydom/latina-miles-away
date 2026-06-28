<section id="services" class="w-full mt-20 p-2.5 overflow-hidden">
    <div class="flex flex-col items-center p-2">
        <h2>{{ __('service.titleC') }}</h2>
        <p class="mb-5">{{ __('service.subtitleC') }}</p>
    </div>

    <div class="swiper services-swiper w-full overflow-x-scroll md:overflow-hidden">
        <div id="serviceContainer" class="swiper-wrapper ">

            <a class="swiper-slide w-[85vw]! max-w-xs p-5" href="{{ route('services.startHere') }}"
                onclick="Livewire.navigate(this.href); return false;">
                <div
                    class="h-full min-h-70 flex flex-col text-start rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm hover:shadow-md relative transition md:hover:border-primary-light md:hover:scale-105">
                    <svg class="mb-7 w-10 h-10 p-1 text-tertiary bg-primary-light/20 rounded-xl shrink-0"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M192 284.4C256.1 269.9 304 212.5 304 144 304 64.5 239.5 0 160 0S16 64.5 16 144c0 68.5 47.9 125.9 112 140.4L128 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-195.6zM168 96c-30.9 0-56 25.1-56 56 0 13.3-10.7 24-24 24s-24-10.7-24-24c0-57.4 46.6-104 104-104 13.3 0 24 10.7 24 24s-10.7 24-24 24z" />
                    </svg>

                    <h3 class="font-semibold text-sm mb-2">{{ __('service.startHere.title') }}</h3>
                    <p class="text-xs text-neutral-700">{{ __('service.startHere.titleParagraph') }}</p>

                    <span class="absolute bottom-5">{!! __('service.startHere.learnMore') !!}</span>
                </div>
            </a>

            <a class="swiper-slide w-[85vw]! max-w-xs p-5" href="{{ route('services.guidanceSession') }}"
                onclick="Livewire.navigate(this.href); return false;">
                <div
                    class="h-full min-h-70 flex flex-col text-start rounded-2xl border-2 border-primary bg-white p-5 shadow-md relative transition md:hover:border-primary-light md:hover:scale-105 md:hover:z-50">
                    <svg class="w-10 h-10 mb-7 p-1 text-tertiary bg-primary-light/20 rounded-xl shrink-0"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M0 240c0 54.4 19.3 104.6 51.9 144.9L3.1 474.3c-2 3.7-3.1 7.9-3.1 12.2 0 14.1 11.4 25.5 25.5 25.5 4 0 7.8-.6 11.5-2.1L153.4 460c31.4 12.9 66.1 20 102.6 20 141.4 0 256-107.5 256-240S397.4 0 256 0 0 107.5 0 240zM144 272a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm144-32a32 32 0 1 0-64 0 32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                    </svg>

                    <span
                        class="absolute top-3 right-3 text-xs font-semibold bg-primary text-white px-2 py-1 rounded-full">
                        {{ __('service.badges.most_popular') }}
                    </span>

                    <h3 class="font-semibold text-sm mb-2">{{ __('service.guidance.title') }}</h3>
                    <p class="text-xs text-neutral-600">{{ __('service.guidance.paragraph') }}</p>

                    <span class="absolute bottom-5">{!! __('service.guidance.learn_more') !!}</span>
                </div>
            </a>

            <a class="swiper-slide w-[85vw]! max-w-xs p-5" href="{{ route('services.accomodationGuide') }}"
                onclick="Livewire.navigate(this.href); return false;">
                <div
                    class="h-full min-h-70 flex flex-col text-start rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm hover:shadow-md relative transition md:hover:border-primary-light md:hover:scale-105">
                    <svg class="w-10 h-10 p-1 mb-7 text-tertiary bg-primary-light/20 rounded-xl shrink-0"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M234.2 8.6c12.3-11.4 31.3-11.4 43.5 0L368 92.3 368 80c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32l0 101.5 37.8 35.1c9.6 9 12.8 22.9 8 35.1S493.2 272 480 272l-16 0 0 176c0 35.3-28.7 64-64 64l-288 0c-35.3 0-64-28.7-64-64l0-176-16 0c-13.2 0-25-8.1-29.8-20.3s-1.6-26.2 8-35.1l224-208z" />
                    </svg>

                    <h3 class="font-semibold text-sm mb-2">{{ __('service.accommodation.title') }}</h3>
                    <p class="text-xs text-neutral-600">{{ __('service.accommodation.paragraph') }}</p>

                    <span class="absolute bottom-5">{!! __('service.accommodation.learn_more') !!}</span>
                </div>
            </a>

            <a class="swiper-slide w-[85vw]! max-w-xs p-5" href="{{ route('services.resumeReview') }}"
               onclick="Livewire.navigate(this.href); return false;">
                <div
                    class="h-full min-h-70 flex flex-col text-start rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm hover:shadow-md relative transition md:hover:border-primary-light md:hover:scale-105">
                    <svg class="w-10 h-10 p-1 mb-7 text-tertiary bg-primary-light/20 rounded-xl shrink-0"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="currentColor"
                            d="M64 48l112 0 0 88c0 39.8 32.2 72 72 72l88 0 0 240c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16L48 64c0-8.8 7.2-16 16-16zM64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-261.5c0-17-6.7-33.3-18.7-45.3L242.7 18.7C230.7 6.7 214.5 0 197.5 0L64 0z" />
                    </svg>

                    <h3 class="font-semibold text-sm mb-2">{{ __('service.resume_review.title') }}</h3>
                    <p class="text-xs text-neutral-600">{{ __('service.resume_review.paragraph') }}</p>

                    <span class="absolute bottom-5">{!! __('service.resume_review.learn_more') !!}</span>
                </div>
            </a>

            <a class="swiper-slide w-[85vw]! max-w-xs p-5" href="{{ route('services.documentReview') }}"
               onclick="Livewire.navigate(this.href); return false;">
                <div
                    class="h-full min-h-70 flex flex-col text-start rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm hover:shadow-md relative transition md:hover:border-primary-light md:hover:scale-105">
                    <svg class="w-10 h-10 p-1 mb-7 text-tertiary bg-primary-light/20 rounded-xl shrink-0"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L368 46.1 465.9 144 490.3 119.6c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L432 177.9 334.1 80 172.4 241.7z" />
                    </svg>

                    <h3 class="font-semibold text-sm mb-2">{{ __('service.document_review.title') }}</h3>
                    <p class="text-xs text-neutral-600">{{ __('service.document_review.paragraph') }}</p>

                    <span class="absolute bottom-5">{{ __('service.document_review.learn_more') }}</span>
                </div>
            </a>

            <a class="swiper-slide w-[85vw]! max-w-xs p-5" href="{{ route('services.workReadiness') }}"
                onclick="Livewire.navigate(this.href); return false;">
                <div
                    class="h-full min-h-70 flex flex-col text-start rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm hover:shadow-md relative transition md:hover:border-primary-light md:hover:scale-105">
                    <svg class="w-10 h-10 p-1 mb-7 text-tertiary bg-primary-light/20 rounded-xl shrink-0"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M200 48l112 0c4.4 0 8 3.6 8 8l0 40-128 0 0-40c0-4.4 3.6-8 8-8zm-56 8l0 40-80 0C28.7 96 0 124.7 0 160l0 96 512 0 0-96c0-35.3-28.7-64-64-64l-80 0 0-40c0-30.9-25.1-56-56-56L200 0c-30.9 0-56 25.1-56 56z" />
                    </svg>

                    <span
                        class="absolute top-3 right-3 text-xs font-semibold bg-primary text-white px-2 py-1 rounded-full">
                        {{ __('service.badges.most_value') }}
                    </span>

                    <h3 class="font-semibold text-sm mb-2">{{ __('service.work_readiness.title') }}</h3>
                    <p class="text-xs text-neutral-600">{{ __('service.work_readiness.paragraph') }}</p>

                    <span class="absolute bottom-5">{!! __('service.work_readiness.learn_more') !!}</span>
                </div>
            </a>

        </div>
    </div>

    <div class="flex gap-10 w-full justify-center">
        <p class="text-sm flex text-neutral-500 mb-2 sm:hidden">
            {!! __('service.swipe') !!}
        </p>
    </div>
</section>
