@php
    $metaDescription = __('resume_review.meta.description');
    $metaTitle = __('resume_review.meta.title');
    $ogTitle = $metaTitle;
    $ogDescription = $metaDescription;
    $ogImage = asset('images/lmaLogo.PNG');
    $ogUrl = 'https://latinamilesaway.com';
@endphp

<x-layout.app :metaTitle="$metaTitle"
    :metaDescription="$metaDescription"
    :ogTitle="$ogTitle"
    :ogDescription="$ogDescription"
    :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <section class="w-full bg-linear-to-b from-primary to-[#EAEFEF] py-10 md:py-14">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6 lg:px-8">

            <div class="overflow-hidden rounded-3xl bg-white shadow-lg md:grid md:grid-cols-[1.15fr_0.85fr]">

                <div class="p-6 md:p-8 lg:p-10">
                    <p class="mb-2 text-sm font-medium uppercase tracking-wide text-primary">
                        {{ __('resume_review.hero.badge') }}
                    </p>

                    <h1 class="mb-3 text-2xl font-semibold text-black md:text-4xl">
                        {{ __('resume_review.hero.title') }}
                    </h1>

                    <p class="mb-6 text-sm leading-relaxed text-neutral-600 md:text-base">
                        {{ __('resume_review.hero.paragraph') }}
                    </p>

                    <div class="rounded-2xl bg-neutral-50 p-5">
                        <h2 class="mb-3 text-lg font-semibold text-black md:text-xl">
                            {{ __('resume_review.who.title') }}
                        </h2>

                        <p class="mb-4 text-sm leading-relaxed text-neutral-700 md:text-base">
                            {{ __('resume_review.who.paragraph') }}
                        </p>

                        <ul class="list-disc space-y-2 pl-5 text-sm leading-relaxed text-neutral-700 marker:text-tertiary md:text-base">
                            <li>{{ __('resume_review.who.items.feedback') }}</li>
                            <li>{{ __('resume_review.who.items.expectations') }}</li>
                            <li>{{ __('resume_review.who.items.improvements') }}</li>
                            <li>{{ __('resume_review.who.items.insights') }}</li>
                        </ul>
                    </div>

                    <div class="mt-6 rounded-2xl border border-primary/15 bg-primary/5 p-5">
                        <p class="text-sm leading-relaxed text-neutral-700 italic md:text-base">
                            {{ __('resume_review.quote') }}
                        </p>
                    </div>
                </div>

                <div class="flex flex-col justify-between border-t border-neutral-200 bg-neutral-50 p-6 md:border-t-0 md:border-l md:p-8 lg:p-10">
                    <div>
                        <h2 class="mb-4 text-lg font-semibold text-black md:text-2xl">
                            {{ __('resume_review.process.title') }}
                        </h2>

                        <ol class="list-decimal space-y-3 pl-5 text-sm text-neutral-700 marker:font-semibold marker:text-primary md:text-base">
                            <li>{{ __('resume_review.process.items.send') }}</li>
                            <li>{{ __('resume_review.process.items.review') }}</li>
                            <li>{{ __('resume_review.process.items.receive') }}</li>
                        </ol>

                        <div class="mt-6 rounded-2xl bg-white p-5 shadow-sm">
                            <h3 class="mb-2 text-base font-semibold text-black md:text-lg">
                                {{ __('resume_review.expect.title') }}
                            </h3>

                            <ul class="space-y-2 text-sm leading-relaxed text-neutral-700 md:text-base">
                                <li>{{ __('resume_review.expect.items.clear') }}</li>
                                <li>{{ __('resume_review.expect.items.easy') }}</li>
                                <li>{{ __('resume_review.expect.items.better') }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-8 rounded-2xl bg-white p-5 shadow-sm">
                        <p class="mb-2 text-sm text-neutral-600 md:text-base">
                            {{ __('resume_review.pricing.label') }}
                        </p>

                        <p class="mb-5 text-2xl font-semibold text-black md:text-3xl">
                            {{ __('resume_review.pricing.amount') }}
                        </p>

                        <a rel="noopener noreferrer" target="_blank"
                            href="https://buy.stripe.com/28E9AM0bf7Hu37Eeejcs800"
                            class="inline-flex items-center justify-center rounded-xl bg-primary px-5 py-2 font-semibold text-white transition duration-200 ease-in-out md:hover:-translate-y-1 md:hover:opacity-90">
                            {{ __('resume_review.pricing.button') }}
                        </a>

                        <p class="mt-4 text-sm text-neutral-600">
                            {{ __('resume_review.pricing.question') }}
                            <a href="mailto:latinamilesaway@gmail.com"
                                class="font-medium text-primary underline hover:opacity-80">
                                {{ __('resume_review.pricing.email') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layout.app>