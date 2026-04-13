<nav class=" z-50 bg-soft/90 px-3 md:px-10">
    <div class="mx-auto flex w-full items-center justify-between">

        <div class="flex items-center gap-3 md:gap-5">
            <a href="{{ route('home') }}" wire:navigate.hover class="shrink-0">
                <img class="block h-14 w-14 md:h-20 md:w-20 " src="{{ asset('images/lma.svg') }}"
                    alt="Latina Miles Away Logo">
            </a>

            <p class="hidden md:block text-2xl">Latina Miles Away</p>

            @if (request()->routeIs('legal.*') ||
                    request()->routeIs('contact') ||
                    request()->routeIs('services.*') ||
                    request()->routeIs('thankyou'))
                <a href="{{ route('home') }}" wire:navigate.hover
                    class="ml-2 flex items-center gap-1 rounded-2xl p-2 text-primary transition duration-300 ease-in-out hover:bg-primary-light hover:text-white group md:flex">
                    <svg class="h-6 w-6 shrink-0 text-primary transition duration-300 ease-in-out group-hover:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path fill="currentColor"
                            d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM264 320C264 289.1 289.1 264 320 264C350.9 264 376 289.1 376 320C376 350.9 350.9 376 320 376C289.1 376 264 350.9 264 320zM208 496C208 451.8 243.8 416 288 416L352 416C396.2 416 432 451.8 432 496C432 504.8 424.8 512 416 512L224 512C215.2 512 208 504.8 208 496z" />
                    </svg>
                    <span class="text-lg">{{ __('nav.home') }}</span>
                </a>
            @endif
        </div>

        <div class="flex items-center gap-2 md:gap-3">
            {{-- <button
                class="hidden rounded-2xl cursor-pointer p-2 text-primary transition duration-200 ease-in-out hover:bg-primary hover:text-white md:block md:text-lg">
                Resources
            </button> --}}

            <button data-cal-link="sheyla-solis-qbslzw/consultation" data-cal-namespace="consultation"
                data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":true}'
                class="rounded-xl px-3 py-2 font-semibold text-white transition duration-200 cursor-pointer
                bg-linear-to-r from-[#34A0A9] to-[#4CC9D4]
                shadow-[0_6px_16px_rgba(52,160,169,0.35)]
                hover:scale-[1.05]
                hover:shadow-[0_8px_20px_rgba(52,160,169,0.5)]
                md:px-4 md:text-lg" wire:navigate.hover >
                {{ __('nav.enquire') }}
            </button>
            <a href="{{ route('lang.switch', 'en') }}" wire:navigate.hover
                class="px-3 py-1 rounded-lg text-sm font-medium transition hover:scale-[1.10] duration-200 cursor-pointer
        {{ app()->getLocale() === 'en' ? 'bg-primary text-white' : 'bg-neutral-200 text-neutral-700' }}">
                EN
            </a>

            <a href="{{ route('lang.switch', 'es') }}" wire:navigate.hover
                class="px-3 py-1 rounded-lg text-sm font-medium transition hover:scale-[1.10] duration-200 cursor-pointer
        {{ app()->getLocale() === 'es' ? 'bg-primary text-white' : 'bg-neutral-200 text-neutral-700' }}">
                ES
            </a>
        </div>
    </div>
</nav>
