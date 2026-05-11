<section
    class="relative overflow-hidden rounded-2xl bg-primary mb-10 md:rounded-none md:min-h-[520px] md:w-full">

    <!-- Background image -->
    <img
        class="absolute inset-0 z-0 h-full w-full object-cover -scale-x-100"
        src="{{ asset('images/melbourne.webp') }}"
        alt="Melbourne">

    <!-- Overlay -->
    <div class="absolute inset-0 z-10 bg-gradient-to-r from-primary via-primary/85 to-transparent"></div>

    <!-- Content -->
    <div class="relative z-20 flex min-h-[520px] items-center p-5 md:px-20">

        <div class="w-full max-w-2xl">

            <div class="inline-flex flex-col gap-2 rounded-2xl bg-blue-100/95 p-4 mb-8 text-sm text-neutral-800 shadow-lg">
                <div class="flex items-center gap-2 font-medium">
                    <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="#cd7f4a" d="M192 284.4C256.1 269.9 304 212.5 304 144
                        304 64.5 239.5 0 160 0S16 64.5 16 144
                        c0 68.5 47.9 125.9 112 140.4L128
                        480c0 17.7 14.3 32 32 32s32-14.3
                        32-32l0-195.6zM168 96c-30.9
                        0-56 25.1-56 56
                        0 13.3-10.7 24-24
                        24s-24-10.7-24-24
                        c0-57.4 46.6-104
                        104-104 13.3 0
                        24 10.7 24 24
                        s-10.7 24-24 24z" />
                    </svg>

                    <span>{{ __('hero.based') }}</span>
                </div>

                <ul class="flex flex-col gap-1 pl-6 text-xs text-neutral-700 list-disc marker:text-tertiary">
                    <li>{{ __('hero.realLife') }}</li>
                    <li>{{ __('hero.easyToFollow') }}</li>
                </ul>
            </div>

            <h1 class="mb-5 text-3xl font-bold leading-tight text-blue-100 drop-shadow-2xl md:text-7xl">
                {!! __('hero.title') !!}
            </h1>

            <p class="max-w-md text-base text-blue-50 md:text-lg">
                {{ __('hero.subTitle') }}
            </p>

            <button
                type="button"
                data-cal-link="sheyla-solis-qbslzw/consultation"
                data-cal-namespace="consultation"
                data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":true}'
                class="mt-6 w-full rounded-2xl bg-[#4CC9D4] px-4 py-4 text-xl font-bold text-amber-50
                shadow-[0_10px_25px_rgba(52,160,169,0.45)]
                transition duration-200 ease-in-out hover:-translate-y-1 hover:bg-[#34a0a9]
                md:max-w-sm">
                {!! __('hero.button') !!}
            </button>

        </div>
    </div>
</section>