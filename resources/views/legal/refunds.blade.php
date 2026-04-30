<x-layout.app>
    <section class="max-w-3xl mx-auto py-10 px-4">

        <h1 class="text-2xl font-semibold mb-2">
            {{ __('refunds.title') }}
        </h1>

        <p class="text-sm text-neutral-500 mb-6">
            {{ __('refunds.last_updated') }}
            <br>
            {{ __('refunds.business_name') }}
        </p>

        <div class="space-y-3 text-sm text-neutral-700 ">

            <h2 class="text-lg font-semibold">
                {{ __('refunds.sections.no_refund_title') }}
            </h2>

            <p>
                {{ __('refunds.sections.no_refund_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('refunds.sections.reschedule_title') }}
            </h2>

            <p>
                {{ __('refunds.sections.reschedule_p1') }}
            </p>

            <p>
                {{ __('refunds.sections.reschedule_p2') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('refunds.sections.missed_title') }}
            </h2>

            <p>
                {{ __('refunds.sections.missed_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('refunds.sections.late_title') }}
            </h2>

            <p>
                {{ __('refunds.sections.late_p1') }}
            </p>

        </div>

    </section>
</x-layout.app>
