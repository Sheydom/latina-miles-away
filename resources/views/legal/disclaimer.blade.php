<x-layout.app>
    <section class="max-w-3xl mx-auto py-10 px-4">

        <h1 class="text-2xl font-semibold mb-2">
            {{ __('disclaimer.title') }}
        </h1>

        <p class="text-sm text-neutral-500 mb-6">
            {{ __('disclaimer.last_updated') }}
            <br>
            {{ __('disclaimer.business_name') }}
        </p>

        <div class="space-y-3 text-sm text-neutral-700 ">

            <h2 class="text-lg font-semibold">
                {{ __('disclaimer.sections.general_title') }}
            </h2>

            <p>
                {{ __('disclaimer.sections.general_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('disclaimer.sections.advice_title') }}
            </h2>

            <p>
                {{ __('disclaimer.sections.advice_p1') }}
            </p>

            <p>
                {{ __('disclaimer.sections.advice_p2') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('disclaimer.sections.guarantee_title') }}
            </h2>

            <p>
                {{ __('disclaimer.sections.guarantee_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('disclaimer.sections.status_title') }}
            </h2>

            <p>
                {{ __('disclaimer.sections.status_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('disclaimer.sections.external_title') }}
            </h2>

            <p>
                {{ __('disclaimer.sections.external_p1') }}
            </p>

        </div>

    </section>
</x-layout.app>
