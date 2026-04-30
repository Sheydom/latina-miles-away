<section class="mb-10 w-full px-3 py-4">
    <div class="mx-auto flex max-w-6xl flex-col items-center gap-8 md:flex-row md:items-center md:gap-10">

        <!-- Image -->
        <div class="w-full md:w-[38%]">
            <img src="{{ asset('images/profile.webp') }}" alt="Profile picture"
                class="mx-auto w-full max-w-sm rounded-3xl object-cover shadow-md md:max-w-none md:h-135" />
        </div>

        <!-- Content -->
        <div class="w-full md:w-[62%] md:pt-2">
            <div class="mb-5 text-center md:text-left">
                <h2 class="text-black md:text-[clamp(2rem,4vw,3rem)]">
                    {!! __('trust.title') !!}
                </h2>
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

    <!-- Modal -->
    <div id="certModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/70 p-3 md:p-6">

        <div class="relative w-full max-w-5xl">
            <button id="closeCertModalX" type="button"
                class="absolute right-2 top-2 flex h-10 w-10 items-center justify-center rounded-full bg-black/50 text-2xl text-white transition duration-200 ease-in-out cursor-pointer  hover:bg-red-500  md:-top-10 md:right-0 md:text-3xl ">
                ✕
            </button>

            <img id="certImage" src="{{ asset('images/lawyer.png') }}" alt="Law degree certificate full size"
                class="w-full max-h-[85vh] rounded-xl bg-white object-contain shadow-lg cursor-pointer" />
        </div>
    </div>
</section>
