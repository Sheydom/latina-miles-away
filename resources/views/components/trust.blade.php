<section class="mb-10 w-full px-3 py-4">
    <div class="mx-auto flex max-w-6xl flex-col items-center gap-8 md:flex-row md:items-center md:gap-10">

        <!-- Image -->
        <div class="w-full md:w-[38%]">
            <img src="{{ asset('images/profile.webp') }}" alt="{{ __('trust.photoAlt') }}"
                class="mx-auto w-full max-w-sm rounded-3xl object-cover shadow-md md:max-w-none md:h-135" />
        </div>

        <!-- Content -->
        <div class="w-full md:w-[62%] md:pt-2">
            <div class="mb-5 text-center md:text-left">
                <h2 class="text-black md:text-[clamp(2rem,4vw,3rem)]">
                    {!! __('trust.title') !!}
                </h2>
                <p class="mt-2 text-lg text-tertiary md:text-xl">
                    {!! __('trust.greeting') !!}
                </p>
            </div>

            <div class="space-y-5">
                <p class=" text-neutral-800">
                    {!! __('trust.firstParagraph') !!}
                </p>

                <div class="rounded-2xl border-l-4 border-tertiary bg-gray-100 p-5">
                    <h3 class="mb-2 text-sm font-semibold uppercase tracking-wide text-black">
                        {{ __('trust.australiaPathHeader') }}
                    </h3>
                    <p class="text-sm  text-neutral-700 md:text-base">
                        {{ __('trust.australiaPathParagraph') }}
                    </p>
                </div>

                <p class=" text-neutral-800">
                    {!! __('trust.thirdParagraph') !!}
                </p>
            </div>
        </div>
    </div>
</section>
