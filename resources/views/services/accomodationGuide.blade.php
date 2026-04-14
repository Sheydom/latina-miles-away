@php
    $metaDescription = __('accommodation_guide.meta.description');
    $metaTitle = __('accommodation_guide.meta.title');
    $ogTitle = $metaTitle;
    $ogDescription = $metaDescription;
    $ogImage = asset('images/lmaLogo.PNG');
    $ogUrl = 'https://latinamilesaway.com';
@endphp

<x-layout.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <section class="w-full bg-linear-to-b from-primary to-[#EAEFEF] py-10 md:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 items-start lg:grid-cols-[1.05fr_0.95fr]">

                <div class="rounded-3xl bg-white p-6 shadow-lg md:p-8 lg:p-10">
                    <span
                        class="mb-4 inline-block rounded-full bg-primary/10 px-4 py-1 text-sm font-medium text-primary">
                        {{ __('accommodation_guide.hero.badge') }}
                    </span>

                    <h1 class="mb-4 text-2xl leading-tight font-semibold text-neutral-900 md:text-4xl">
                        {{ __('accommodation_guide.hero.title') }}
                    </h1>

                    <p class="mb-8 text-sm leading-relaxed text-neutral-600 md:text-base">
                        {{ __('accommodation_guide.hero.paragraph') }}
                    </p>

                    <div class="space-y-8">
                        <div>
                            <h2 class="mb-3 text-lg font-semibold text-neutral-900 md:text-2xl">
                                {{ __('accommodation_guide.who.title') }}
                            </h2>
                            <p class="text-sm leading-relaxed text-neutral-700 md:text-base">
                                {{ __('accommodation_guide.who.paragraph') }}
                            </p>
                        </div>

                        <div>
                            <h2 class="mb-3 text-lg font-semibold text-neutral-900 md:text-2xl">
                                {{ __('accommodation_guide.learn.title') }}
                            </h2>
                            <ul
                                class="list-disc space-y-2 pl-5 text-sm text-neutral-700 marker:text-tertiary md:text-base">
                                <li>{{ __('accommodation_guide.learn.items.weekly_cost') }}</li>
                                <li>{{ __('accommodation_guide.learn.items.search') }}</li>
                                <li>{{ __('accommodation_guide.learn.items.scams') }}</li>
                                <li>{{ __('accommodation_guide.learn.items.verify') }}</li>
                                <li>{{ __('accommodation_guide.learn.items.questions') }}</li>
                                <li>{{ __('accommodation_guide.learn.items.bond_system') }}</li>
                                <li>{{ __('accommodation_guide.learn.items.protect_bond') }}</li>
                                <li>{{ __('accommodation_guide.learn.items.recover_bond') }}</li>
                            </ul>
                        </div>

                        <div class="rounded-2xl border border-neutral-200 bg-neutral-50 p-4 md:p-5">
                            <p
                                class="text-center text-sm leading-relaxed text-neutral-600 italic md:text-left md:text-base">
                                {{ __('accommodation_guide.quote') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl bg-white p-6 shadow-lg md:p-8">
                    <div class="mb-6">
                        <h2 class="mb-2 text-center text-xl font-semibold text-neutral-900 md:text-left md:text-2xl">
                            {{ __('accommodation_guide.preview.title') }}
                        </h2>
                        <p class="text-center text-sm text-neutral-600 md:text-left md:text-base">
                            {{ __('accommodation_guide.preview.paragraph') }}
                        </p>
                    </div>

                    <div class="block md:hidden">
                        <img src="{{ asset('images/accomodationGuideScreenshot.png') }}"
                            alt="{{ __('accommodation_guide.preview.image_alt') }}"
                            class="w-full rounded-2xl border shadow-md">

                        <div class="mt-4 flex flex-col gap-3">
                            <a href="{{ asset('downloads/rentGuide26.pdf') }}" target="_blank"
                                class="w-full rounded-xl border border-primary bg-white px-5 py-3 text-center font-semibold text-primary">
                                {{ __('accommodation_guide.preview.open_pdf') }}
                            </a>

                            <a href="{{ asset('downloads/rentGuide26.pdf') }}" download
                                class="w-full rounded-xl bg-primary px-5 py-3 text-center font-semibold text-white">
                                {{ __('accommodation_guide.preview.download') }}
                            </a>
                        </div>
                    </div>

                    <div
                        class="mb-6 hidden overflow-hidden rounded-2xl border border-neutral-200 bg-white shadow-sm md:block">
                        <iframe src="{{ asset('downloads/rentGuide26.pdf') }}" class="h-105 w-full md:h-140"
                            loading="lazy"></iframe>
                    </div>

                    <div class="mb-8 hidden justify-center md:flex md:justify-start">
                        <a href="{{ asset('downloads/rentGuide26.pdf') }}" download
                            class="inline-flex items-center justify-center rounded-xl bg-primary px-5 py-3 text-sm font-semibold text-white transition duration-200 ease-in-out md:text-base md:hover:-translate-y-1 md:hover:opacity-90">
                            {{ __('accommodation_guide.preview.download') }}
                        </a>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <h3 class="mt-6 mb-2 text-lg font-semibold text-neutral-900 md:text-xl">
                                {{ __('accommodation_guide.benefits.title') }}
                            </h3>
                            <div class="grid gap-4 sm:grid-cols-3">
                                <div class="rounded-2xl border bg-neutral-50 p-4">
                                    <p class="font-semibold">{{ __('accommodation_guide.benefits.items.decisions') }}
                                    </p>
                                </div>

                                <div class="rounded-2xl border bg-neutral-50 p-4">
                                    <p class="font-semibold">{{ __('accommodation_guide.benefits.items.mistakes') }}
                                    </p>
                                </div>

                                <div class="rounded-2xl border bg-neutral-50 p-4">
                                    <p class="font-semibold">{{ __('accommodation_guide.benefits.items.confidence') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="mb-2 text-lg font-semibold text-neutral-900 md:text-xl">
                                {{ __('accommodation_guide.extra.title') }}
                            </h3>
                            <p class="text-sm leading-relaxed text-neutral-700 md:text-base">
                                {{ __('accommodation_guide.extra.paragraph') }}
                            </p>
                        </div>

                        <div>
                            <h3 class="mb-2 text-lg font-semibold text-neutral-900 md:text-xl">
                                {{ __('accommodation_guide.why.title') }}
                            </h3>
                            <p class="text-sm leading-relaxed text-neutral-700 md:text-base">
                                {{ __('accommodation_guide.why.paragraph') }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout.app>
