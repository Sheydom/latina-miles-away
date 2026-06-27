<section class="mx-auto py-20 w-full h-full px-6 bg-linear-to-b from-primary to-beige">
    <div class="grid gap-20 md:px-10 lg:grid-cols-[520px_620px] lg:flex lg:items-center lg:justify-center">

        <!-- Left -->
        <div class="">
            {{-- <span class="text-sm font-semibold uppercase tracking-[0.25em] text-primary">
                Contact
            </span> --}}

            <h2 class="mt-4 text-5xl text-black font-bold leading-tight">
                {{ __('lastCall.title') }}
            </h2>

            <p class="mt-6 text-lg leading-8 text-gray-900">
                {!! __('lastCall.paragraph') !!}
            </p>

            <div class="mt-10 space-y-4">

                <button
                    type="button"
                    data-cal-link="sheyla-solis-qbslzw/consultation"
                    data-cal-namespace="consultation"
                    data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":true}'
                    class="w-full rounded-2xl bg-[#4CC9D4] px-8 py-4 font-semibold text-white shadow-xl cursor-pointer transition hover:-translate-y-1 hover:shadow-2xl"
                >
                    {!! __('lastCall.button') !!}
                </button>

                <p class="text-sm text-gray-500">
                    Usually replies within 24 hours.
                </p>

            </div>
        </div>

        <!-- Right -->
        <div class="flex justify-center w-full">
            <x-contactForm />
        </div>

    </div>
</section>