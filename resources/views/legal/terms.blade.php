<x-layout.app>
    <section class="max-w-3xl mx-auto py-10 px-4">

        <h1 class="text-2xl font-semibold mb-2">
            {{ __('terms.title') }}
        </h1>

        <p class="text-sm text-neutral-500 mb-6">
            {{ __('terms.last_updated') }}
            <br>
            {{ __('terms.business_name') }}
        </p>

        <div class="space-y-3 text-sm text-neutral-700 ">

            <p>
                {{ __('terms.intro') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('terms.sections.nature_title') }}
            </h2>

            <p>
                {{ __('terms.sections.nature_p1') }}
            </p>

            <p>
                {{ __('terms.sections.nature_p2') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('terms.sections.bookings_title') }}
            </h2>

            <p>
                {{ __('terms.sections.bookings_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('terms.sections.payments_title') }}
            </h2>

            <p>
                {{ __('terms.sections.payments_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('terms.sections.client_title') }}
            </h2>

            <p>
                {{ __('terms.sections.client_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('terms.sections.changes_title') }}
            </h2>

            <p>
                {{ __('terms.sections.changes_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('terms.sections.liability_title') }}
            </h2>

            <p>
                {{ __('terms.sections.liability_p1') }}
            </p>

        </div>

    </section>
</x-layout.app>
