@php
    $metaDescription =
        'Professional resume review tailored to Australian standards. Improve your chances of getting hired with clear and practical feedback.';
    $metaTitle = 'Professional Resume Review for Australia | Latina Miles Away';
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

                <!-- Left content -->
                <div class="p-6 md:p-8 lg:p-10">
                    <p class="mb-2 text-sm font-medium uppercase tracking-wide text-primary">
                        Job support
                    </p>

                    <h1 class="mb-3 text-2xl font-semibold text-black md:text-4xl">
                        Resume Review
                    </h1>

                    <p class="mb-6 text-sm leading-relaxed text-neutral-600 md:text-base">
                        Practical CV feedback for people looking for their first job in Australia.
                    </p>

                    <div class="rounded-2xl bg-neutral-50 p-5">
                        <h2 class="mb-3 text-lg font-semibold text-black md:text-xl">
                            Who it's for
                        </h2>

                        <p class="mb-4 text-sm leading-relaxed text-neutral-700 md:text-base">
                            If you're applying for entry-level jobs in Australia such as hospitality, retail,
                            cleaning, warehouse, or similar roles, this review helps you improve your CV and make it
                            more suitable for local expectations.
                        </p>

                        <ul
                            class="list-disc space-y-2 pl-5 text-sm leading-relaxed text-neutral-700 marker:text-tertiary md:text-base">
                            <li>Feedback on your current CV</li>
                            <li>Suggestions to match Australian expectations</li>
                            <li>Simple improvements to increase your chances</li>
                            <li>Real insights based on what works</li>
                        </ul>
                    </div>

                    <div class="mt-6 rounded-2xl border border-primary/15 bg-primary/5 p-5">
                        <p class="text-sm italic leading-relaxed text-neutral-700 md:text-base">
                            A simple and affordable review to help you feel more confident before applying.
                        </p>
                    </div>
                </div>

                <!-- Right content -->
                <div
                    class="flex flex-col justify-between border-t border-neutral-200 bg-neutral-50 p-6 md:border-t-0 md:border-l md:p-8 lg:p-10">
                    <div>
                        <h2 class="mb-4 text-lg font-semibold text-black md:text-2xl">
                            How it works
                        </h2>

                        <ol
                            class="space-y-3 text-sm text-neutral-700 marker:font-semibold marker:text-primary md:text-base list-decimal pl-5">
                            <li>You send your CV</li>
                            <li>I review it carefully</li>
                            <li>You receive feedback within 24-48 hours</li>
                        </ol>

                        <div class="mt-6 rounded-2xl bg-white p-5 shadow-sm">
                            <h3 class="mb-2 text-base font-semibold text-black md:text-lg">
                                What you can expect
                            </h3>

                            <ul class="space-y-2 text-sm leading-relaxed text-neutral-700 md:text-base">
                                <li>Clear and honest feedback</li>
                                <li>Easy suggestions you can apply quickly</li>
                                <li>Better presentation for Australian employers</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-8 rounded-2xl bg-white p-5 shadow-sm">
                        <p class="mb-2 text-sm text-neutral-600 md:text-base">
                            Price
                        </p>

                        <p class="mb-5 text-2xl font-semibold text-black md:text-3xl">
                            $15 AUD
                        </p>

                        <a rel="noopener noreferrer" target="_blank"
                            href="https://buy.stripe.com/28E9AM0bf7Hu37Eeejcs800"
                            class="inline-flex items-center justify-center px-5 py-2 rounded-xl bg-primary text-white font-semibold transition duration-200 ease-in-out md:hover:-translate-y-1 md:hover:opacity-90">
                            Pay Now
                        </a>
                        <p class="mt-4 text-sm text-neutral-600">
                            Prefer to ask a question first?
                            <a href="mailto:latinamilesaway@gmail.com"
                                class="font-medium text-primary underline hover:opacity-80">
                                Email us
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layout.app>
