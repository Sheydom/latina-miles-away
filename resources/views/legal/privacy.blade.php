<x-layout.app>
    <section class="max-w-3xl mx-auto py-10 px-4">

        <h1 class="text-2xl font-semibold mb-2">
            {{ __('privacy.title') }}
        </h1>

        <p class="text-sm text-neutral-500 mb-6">
            {{ __('privacy.last_updated') }}
            <br>
            {{ __('privacy.business_name') }}
        </p>

        <div class="space-y-3 text-sm text-neutral-700 leading-relaxed">

            <h2 class="text-lg font-semibold">
                {{ __('privacy.sections.compliance_title') }}
            </h2>

            <p>
                {{ __('privacy.sections.compliance_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('privacy.sections.collect_title') }}
            </h2>

            <p>
                {{ __('privacy.sections.collect_intro') }}
            </p>

            <ul class="list-disc pl-6">
                <li>{{ __('privacy.sections.collect_list.name') }}</li>
                <li>{{ __('privacy.sections.collect_list.email') }}</li>
                <li>{{ __('privacy.sections.collect_list.phone') }}</li>
                <li>{{ __('privacy.sections.collect_list.booking') }}</li>
                <li>{{ __('privacy.sections.collect_list.consultation') }}</li>
            </ul>

            <h2 class="text-lg font-semibold">
                {{ __('privacy.sections.use_title') }}
            </h2>

            <p>
                {{ __('privacy.sections.use_intro') }}
            </p>

            <ul class="list-disc pl-6">
                <li>{{ __('privacy.sections.use_list.schedule') }}</li>
                <li>{{ __('privacy.sections.use_list.communicate') }}</li>
                <li>{{ __('privacy.sections.use_list.services') }}</li>
                <li>{{ __('privacy.sections.use_list.improve') }}</li>
                <li>{{ __('privacy.sections.use_list.payments') }}</li>
            </ul>

            <h2 class="text-lg font-semibold">
                {{ __('privacy.sections.payment_title') }}
            </h2>

            <p>
                {{ __('privacy.sections.payment_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('privacy.sections.security_title') }}
            </h2>

            <p>
                {{ __('privacy.sections.security_p1') }}
            </p>

            <h2 class="text-lg font-semibold">
                {{ __('privacy.sections.third_party_title') }}
            </h2>

            <p>
                {{ __('privacy.sections.third_party_intro') }}
            </p>

            <ul class="list-disc pl-6">
                <li>{{ __('privacy.sections.third_party_list.stripe') }}</li>
                <li>{{ __('privacy.sections.third_party_list.booking') }}</li>
                <li>{{ __('privacy.sections.third_party_list.email') }}</li>
            </ul>

            <h2 class="text-lg font-semibold">
                {{ __('privacy.sections.contact_title') }}
            </h2>

            <p>
                {{ __('privacy.sections.contact_p1') }}
            </p>

        </div>

    </section>
</x-layout.app>