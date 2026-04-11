@php
    $metaDescription =
        'Learn how to find safe accommodation in Australia, avoid scams, understand leases, and protect your bond with clear step-by-step guidance.';
@endphp
<x-layout.app :metaDescription="$metaDescription">
    <section class="w-full bg-linear-to-b from-primary to-[#EAEFEF] py-10 md:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] items-start">

                <!-- Left Content -->
                <div class="bg-white rounded-3xl shadow-lg p-6 md:p-8 lg:p-10">
                    <span
                        class="inline-block mb-4 rounded-full bg-primary/10 px-4 py-1 text-sm font-medium text-primary">
                        Free Guide
                    </span>

                    <h1 class="text-2xl md:text-4xl font-semibold text-neutral-900 leading-tight mb-4">
                        How to Rent a Room or House in Australia
                    </h1>

                    <p class="text-sm md:text-base text-neutral-600 leading-relaxed mb-8">
                        Finding accommodation in Australia is not just about rent.
                        If you don't understand how it works, you can lose money, fall into scams, or choose the wrong
                        place.
                    </p>

                    <div class="space-y-8">
                        <div>
                            <h2 class="text-lg md:text-2xl font-semibold text-neutral-900 mb-3">
                                Who it's for
                            </h2>
                            <p class="text-sm md:text-base text-neutral-700 leading-relaxed">
                                If you are planning to move to Australia or you've just arrived and don't know how to
                                find a safe and suitable place to live.
                            </p>
                        </div>

                        <div>
                            <h2 class="text-lg md:text-2xl font-semibold text-neutral-900 mb-3">
                                What you'll learn inside this guide
                            </h2>
                            <ul
                                class="space-y-2 pl-5 text-sm md:text-base text-neutral-700 list-disc marker:text-tertiary">
                                <li>How to calculate the real weekly cost, not just the rent</li>
                                <li>Where to search for accommodation safely</li>
                                <li>How to identify common scams and red flags</li>
                                <li>How to verify if a place is real before sending money</li>
                                <li>What questions to ask before saying yes</li>
                                <li>How the bond system works in Australia</li>
                                <li>How to protect your bond and avoid losing money</li>
                                <li>What to do when you move out to recover your bond</li>
                            </ul>
                        </div>

                        <div class="rounded-2xl bg-neutral-50 border border-neutral-200 p-4 md:p-5">
                            <p
                                class="text-sm md:text-base text-neutral-600 italic leading-relaxed text-center md:text-left">
                                “This guide is designed to give you clarity and direction — so you don't waste time,
                                money, or make unnecessary mistakes.”
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="bg-white rounded-3xl shadow-lg p-6 md:p-8">
                    <div class="mb-6">
                        <h2 class="text-xl md:text-2xl font-semibold text-neutral-900 mb-2 text-center md:text-left">
                            Preview the Free Guide
                        </h2>
                        <p class="text-sm md:text-base text-neutral-600 text-center md:text-left">
                            Have a look inside before downloading it.
                        </p>
                    </div>
                    <!-- Mobile preview image -->
                    <div class="block md:hidden">
                        <img src="{{ asset('images/accomodationGuideScreenshot.png') }}"
                            alt="Preview of the accommodation guide" class="w-full rounded-2xl shadow-md border">

                        <div class="mt-4 flex flex-col gap-3">
                            <a href="{{ asset('downloads/rentGuide26.pdf') }}" target="_blank"
                                class="w-full text-center px-5 py-3 rounded-xl bg-white border border-primary text-primary font-semibold">
                                Open PDF
                            </a>

                            <a href="{{ asset('downloads/rentGuide26.pdf') }}" download
                                class="w-full text-center px-5 py-3 rounded-xl bg-primary text-white font-semibold">
                                Download Full Guide
                            </a>
                        </div>
                    </div>
                    <div
                        class="overflow-hidden hidden md:block rounded-2xl border border-neutral-200 shadow-sm mb-6 bg-white">
                        <iframe src="{{ asset('downloads/rentGuide26.pdf') }}" class="w-full h-105 md:h-140"
                            loading="lazy">
                        </iframe>
                    </div>

                    <div class=" hidden md:flex justify-center md:justify-start mb-8">
                        <a href="{{ asset('downloads/rentGuide26.pdf') }}" download
                            class="inline-flex items-center justify-center rounded-xl bg-primary px-5 py-3 text-sm md:text-base font-semibold
                             text-white transition duration-200 ease-in-out md:hover:-translate-y-1 md:hover:opacity-90">
                            Download Full Guide
                        </a>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg md:text-xl font-semibold text-neutral-900 mt-6 mb:mt-none mb-2">
                                What you get
                            </h3>
                            <div class="grid gap-4 sm:grid-cols-3">

                                <div class="bg-neutral-50 rounded-2xl p-4 border">
                                    <p class="font-semibold">✔ Make better decisions</p>
                                </div>

                                <div class="bg-neutral-50 rounded-2xl p-4 border">
                                    <p class="font-semibold">✔ Avoid common mistakes</p>
                                </div>

                                <div class="bg-neutral-50 rounded-2xl p-4 border">
                                    <p class="font-semibold">✔ Feel confident when renting</p>
                                </div>

                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg md:text-xl font-semibold text-neutral-900 mb-2">
                                Extra value
                            </h3>
                            <p class="text-sm md:text-base text-neutral-700 leading-relaxed">
                                Includes ready-to-use messages in English so you can contact landlords and ask the right
                                questions with confidence.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg md:text-xl font-semibold text-neutral-900 mb-2">
                                Why this guide matters
                            </h3>
                            <p class="text-sm md:text-base text-neutral-700 leading-relaxed">
                                Many people focus only on rent.

                                But your real cost includes transport, bills, and daily expenses — and choosing the
                                wrong place can cost you much more.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout.app>
