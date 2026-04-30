<x-layout.app robots="noindex, nofollow">
    <section class="min-h-screen w-full bg-linear-to-b from-primary to-[#EAEFEF] px-4 py-10 md:px-6 md:py-16">
        <div class="mx-auto max-w-3xl">
            <div class="overflow-hidden rounded-3xl bg-white shadow-xl ring-1 ring-black/5">

                <!-- Top section -->
                <div class="bg-primary px-6 py-10 text-center text-white md:px-10">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-white/20 text-3xl font-bold">
                        ✓
                    </div>

                    <p class="mb-2 text-sm font-semibold uppercase tracking-[0.2em] text-white/80">
                        Payment successful
                    </p>

                    <h1 class="text-3xl font-bold md:text-4xl">
                        Thank You for Your Purchase
                    </h1>

                    <p class="mx-auto mt-3 max-w-xl text-sm  text-white/90 md:text-base">
                        Your payment has been received successfully. Please follow the next step below so we can begin
                        working on your service.
                    </p>
                </div>

                <!-- Main content -->
                <div class="px-6 py-8 md:px-10 md:py-10">
                    <div class="mb-8 rounded-2xl bg-neutral-50 p-5 ring-1 ring-neutral-200">
                        <h2 class="mb-3 text-xl font-semibold text-neutral-900">
                            Next Step
                        </h2>

                        <p class="mb-4 text-neutral-700 ">
                            Please send your documents and details to:
                        </p>

                        <a href="mailto:latinamilesaway@gmail.com"
                            class="inline-flex items-center rounded-xl bg-primary px-5 py-3 text-sm font-semibold text-white duration-200 ease-in-out md:hover:-translate-y-1 md:hover:opacity-90 hover:opacity-90">
                            latinamilesaway@gmail.com
                        </a>
                    </div>

                    <div class="grid gap-4 md:grid-cols-2">
                        <div class="rounded-2xl border border-neutral-200 p-5">
                            <h3 class="mb-3 text-lg font-semibold text-neutral-900">
                                Include in your email
                            </h3>

                            <ul class="space-y-2 text-sm  text-neutral-700 list-disc marker:text-tertiary pl-5">
                                <li> Your full name</li>
                                <li> The service you purchased</li>
                                <li> Your documents (PDF, DOC, DOCX)</li>
                                <li> Any extra details or questions</li>
                            </ul>
                        </div>

                        <div class="rounded-2xl border border-neutral-200 p-5">
                            <h3 class="mb-3 text-lg font-semibold text-neutral-900">
                                What happens next
                            </h3>

                            <ul class="space-y-2 text-sm  text-neutral-700 list-disc marker:text-tertiary pl-5">
                                <li> We review your submission</li>
                                <li> We contact you if anything is missing</li>
                                <li> You receive your response within 48 hours</li>
                                <li> Your Stripe receipt has been sent by email</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-8 rounded-2xl bg-primary/5 p-5 text-sm  text-neutral-700">
                        <p>
                            <span class="font-semibold text-neutral-900">Important:</span>
                            To avoid delays, please make sure your email includes your name and the service you paid
                            for.
                        </p>
                    </div>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="mailto:latinamilesaway@gmail.com?subject=Service%20Submission"
                            class="inline-flex items-center justify-center rounded-xl bg-primary px-5 py-3 text-sm font-semibold text-white duration-200 ease-in-out md:hover:-translate-y-1 md:hover:opacity-90 hover:opacity-90">
                            Send Documents Now
                        </a>

                        <a href="{{ route('home') }}"
                            class="inline-flex items-center justify-center rounded-xl border border-neutral-300 px-5 py-3 text-sm font-semibold text-neutral-800 duration-200 ease-in-out md:hover:-translate-y-1 md:hover:opacity-90 hover:opacity-90">
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>
