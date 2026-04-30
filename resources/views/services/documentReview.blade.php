@php
    $metaDescription = __('document_review.meta.description');
    $metaTitle = __('document_review.meta.title');
    $ogTitle = $metaTitle;
    $ogDescription = $metaDescription;
    $ogImage = asset('images/lmaLogo.PNG');
    $ogUrl = 'https://latinamilesaway.com';
@endphp

<x-layout.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <section class="w-full bg-linear-to-b from-primary to-[#EAEFEF] px-4 py-10 md:px-6 md:py-16">
        <div class="mx-auto max-w-6xl">
            <div class="grid overflow-hidden rounded-3xl bg-white shadow-lg md:grid-cols-[1.2fr_0.9fr]">

                <div class="p-6 md:p-10">
                    <div class="mb-8">
                        <p
                            class="mb-3 inline-block rounded-full bg-primary/10 px-3 py-1 text-sm font-medium text-primary">
                            {{ __('document_review.hero.badge') }}
                        </p>

                        <h1 class="mb-4 text-3xl font-semibold text-black md:text-4xl">
                            {{ __('document_review.hero.title') }}
                        </h1>

                        <p class="max-w-xl  text-neutral-600">
                            {{ __('document_review.hero.paragraph') }}
                        </p>
                    </div>

                    <div class="mb-8">
                        <h2 class="mb-3 text-xl font-semibold text-black">
                            {{ __('document_review.who.title') }}
                        </h2>
                        <p class=" text-neutral-600">
                            {{ __('document_review.who.paragraph') }}
                        </p>
                    </div>

                    <div class="mb-8 rounded-2xl bg-neutral-100 p-5 md:p-6">
                        <h2 class="mb-4 text-xl font-semibold text-black">
                            {{ __('document_review.help.title') }}
                        </h2>
                        <ul class="list-disc space-y-2 pl-5  text-neutral-600 marker:text-tertiary">
                            <li>{{ __('document_review.help.items.statutory') }}</li>
                            <li>{{ __('document_review.help.items.statements') }}</li>
                            <li>
                                {{ __('document_review.help.items.visa') }}
                                <span class="italic">{{ __('document_review.help.items.visa_note') }}</span>
                            </li>
                            <li>{{ __('document_review.help.items.emails') }}</li>
                            <li>{{ __('document_review.help.items.applications') }}</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl bg-primary/10 p-5">
                        <p class=" text-neutral-700 italic">
                            {{ __('document_review.quote') }}
                        </p>
                    </div>
                </div>

                <div class="border-t border-neutral-200 bg-neutral-50 p-6 md:border-t-0 md:border-l md:p-10">
                    <div class="mb-8">
                        <h2 class="mb-4 text-xl font-semibold text-black">
                            {{ __('document_review.included.title') }}
                        </h2>
                        <ul class="list-disc space-y-3 pl-5  text-neutral-700 marker:text-tertiary">
                            <li>{{ __('document_review.included.items.grammar') }}</li>
                            <li>{{ __('document_review.included.items.clarity') }}</li>
                            <li>{{ __('document_review.included.items.strength') }}</li>
                        </ul>
                    </div>

                    <div class="mb-8 rounded-2xl bg-white p-5 shadow-sm">
                        <h3 class="mb-4 text-lg font-semibold text-black">
                            {{ __('document_review.expect.title') }}
                        </h3>
                        <ul class="space-y-3 text-neutral-600">
                            <li>{{ __('document_review.expect.items.simple') }}</li>
                            <li>{{ __('document_review.expect.items.tone') }}</li>
                            <li>{{ __('document_review.expect.items.meaning') }}</li>
                        </ul>
                    </div>

                    <div class="rounded-2xl bg-white p-6 shadow-md">
                        <p class="mb-2 text-sm uppercase tracking-wide">
                            {{ __('document_review.pricing.label') }}
                        </p>

                        <p class="mb-5 text-3xl font-semibold">
                            {{ __('document_review.pricing.amount') }}
                        </p>

                        <p class="mb-6 text-sm ">
                            {{ __('document_review.pricing.paragraph') }}
                        </p>

                        <a rel="noopener noreferrer" target="_blank"
                            href="https://buy.stripe.com/28E9AM7DHd1O8rY8TZcs801"
                            class="inline-flex w-full cursor-pointer items-center justify-center rounded-xl bg-primary px-5 py-3 font-semibold text-white duration-200 ease-in-out hover:shadow-md md:hover:-translate-y-1 md:hover:opacity-90">
                            {{ __('document_review.pricing.button') }}
                        </a>

                        <p class="mt-4 text-sm text-neutral-600">
                            {{ __('document_review.pricing.question') }}
                            <a href="mailto:latinamilesaway@gmail.com"
                                class="font-medium text-primary underline hover:opacity-80">
                                {{ __('document_review.pricing.email') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>
