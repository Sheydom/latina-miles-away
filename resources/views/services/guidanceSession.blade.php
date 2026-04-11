@php
    $metaDescription =
        'Book a 1-on-1 guidance session for personalised advice on visas, jobs, and settling in Australia based on real-life experience.';
@endphp
<x-layout.app :metaDescription="$metaDescription">

    <section class="w-full bg-linear-to-b from-primary to-[#EAEFEF] py-10 md:py-14">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- Main card -->
            <div class="overflow-hidden rounded-3xl bg-white shadow-lg md:grid md:grid-cols-[1.15fr_0.85fr]">

                <!-- Left content -->
                <div class="p-6 md:p-8 lg:p-10">
                    <div class="mb-6">
                        <p class="mb-2 text-sm font-medium uppercase tracking-wide text-primary">
                            Personal support
                        </p>

                        <h1 class="mb-3 text-2xl font-semibold text-black md:text-4xl">
                            1:1 Guidance Session
                        </h1>

                        <p class="max-w-2xl text-sm leading-relaxed text-neutral-600 md:text-base">
                            Clarity, direction, and honest guidance for your migration journey — based on real
                            experience, not just theory.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="rounded-2xl bg-neutral-50 p-5">
                            <h2 class="mb-2 text-lg font-semibold text-black md:text-xl">
                                Who it’s for
                            </h2>
                            <p class="text-sm leading-relaxed text-neutral-700 md:text-base">
                                If you’re planning to move to Australia or already here and feel unsure about your next
                                steps, this session is designed to help you understand your options more clearly.
                            </p>
                        </div>

                        <div class="rounded-2xl bg-neutral-50 p-5">
                            <h2 class="mb-3 text-lg font-semibold text-black md:text-xl">
                                What we can talk about
                            </h2>
                            <ul
                                class="space-y-2 pl-5 text-sm leading-relaxed text-neutral-700 marker:text-tertiary md:text-base list-disc">
                                <li>Your visa pathway based on real personal experience</li>
                                <li>What documents you may need</li>
                                <li>How to prepare for your application process</li>
                                <li>Job and settlement strategies</li>
                                <li>How to avoid common mistakes</li>
                            </ul>
                        </div>

                        <div class="rounded-2xl bg-neutral-50 p-5">
                            <h2 class="mb-3 text-lg font-semibold text-black md:text-xl">
                                What you get
                            </h2>
                            <ul
                                class="space-y-2 pl-5 text-sm leading-relaxed text-neutral-700 marker:text-tertiary md:text-base list-disc">
                                <li>Personalised guidance</li>
                                <li>Clear next steps</li>
                                <li>Honest insights based on real situations</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-6 rounded-2xl border border-primary/15 bg-primary/5 p-5">
                        <p class="text-sm italic leading-relaxed text-neutral-700 md:text-base">
                            “This session is designed to give you clarity and direction — so you don’t waste time,
                            money, or make unnecessary mistakes.”
                        </p>
                    </div>
                </div>

                <!-- Right column -->
                <div class="flex flex-col border-t border-neutral-200 bg-neutral-50 md:border-t-0 md:border-l">
                    <div class="w-full">
                        <img src="{{ asset('images/profile.webp') }}" alt="Profile photo"
                            class="h-72 w-full object-cover md:h-full md:min-h-80 lg:min-h-105">
                    </div>

                    <div class="p-6 md:p-8">
                        <h2 class="mb-4 text-lg font-semibold text-black md:text-2xl">
                            My experience
                        </h2>

                        <p class="mb-5 text-sm leading-relaxed text-neutral-600 md:text-base">
                            I understand the process from real experience and know how confusing it can feel when you
                            are trying to make the right decisions.
                        </p>

                        <ul class="grid grid-cols-1 gap-3 text-sm text-neutral-700 md:text-base">
                            <li class="flex items-center gap-3 rounded-xl bg-white px-4 py-3 shadow-sm">
                                <svg class="h-5 w-5 shrink-0 text-primary" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path fill="currentColor"
                                        d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                </svg>
                                Partner sponsorship
                            </li>

                            <li class="flex items-center gap-3 rounded-xl bg-white px-4 py-3 shadow-sm">
                                <svg class="h-5 w-5 shrink-0 text-primary" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path fill="currentColor"
                                        d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                </svg>
                                Permanent Residency
                            </li>

                            <li class="flex items-center gap-3 rounded-xl bg-white px-4 py-3 shadow-sm">
                                <svg class="h-5 w-5 shrink-0 text-primary" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path fill="currentColor"
                                        d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                </svg>
                                COVID visa (408)
                            </li>

                            <li class="flex items-center gap-3 rounded-xl bg-white px-4 py-3 shadow-sm">
                                <svg class="h-5 w-5 shrink-0 text-primary" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 640">
                                    <path fill="currentColor"
                                        d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
                                </svg>
                                Student visa
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact / CTA -->
            <div class="mx-auto mt-8 max-w-3xl rounded-3xl bg-white p-6 text-center shadow-md md:p-8">
                <h2 class="mb-2 text-xl font-semibold text-black md:text-2xl">
                    Have a quick question before booking?
                </h2>

                <p class="mb-5 text-sm leading-relaxed text-neutral-600 md:text-base">
                    Feel free to send a quick email first. For full guidance and personalised support, please book a
                    consultation below.
                </p>

                <a href="mailto:latinamilesaway@gmail.com"
                    class="inline-block rounded-xl bg-primary px-5 py-3 font-semibold text-white transition duration-200 ease-in-out md:hover:-translate-y-1 md:hover:opacity-90">
                    Send me a quick email
                </a>

                <p class="mt-4 text-sm text-neutral-600">
                    Prefer to ask a question first?
                    <a href="mailto:latinamilesaway@gmail.com"
                        class="font-medium text-primary underline hover:opacity-80">
                        Email us
                    </a>
                </p>
            </div>

            <!-- Booking area -->
            <div class="mt-8 overflow-hidden rounded-3xl bg-white shadow-md">
                <div class="border-b border-neutral-200 px-6 py-5 md:px-8">
                    <h2 class="text-xl font-semibold text-black md:text-2xl">
                        Book your session
                    </h2>
                    <p class="mt-1 text-sm text-neutral-600 md:text-base">
                        Choose a time that works for you.
                    </p>
                </div>

                <div class="p-2 md:p-4">
                    <div id="my-cal-inline-consultation" class="w-full"
                        style="min-height: 500px; -webkit-overflow-scrolling: touch;"></div>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>
