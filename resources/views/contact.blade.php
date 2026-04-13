<x-layout.app class="flex justify-center w-full">
    <section class="text-left py-10 px-4">
        <h1 class="text-2xl font-semibold mb-2 text-left">
            {{ __('contact.title') }}
        </h1>

        <p class="text-neutral-600 text-left mb-8">
            {!! __('contact.intro') !!}
        </p>

        <div class="grid md:grid-cols-1 gap-8">
            {{-- CONTACT DETAILS --}}
            <div class="space-y-6">
                <div class="bg-white rounded-xl shadow-sm border border-neutral-200 p-5">
                    <h2 class="font-semibold mb-3">
                        {{ __('contact.email.title') }}
                    </h2>

                    <p class="text-sm text-neutral-600 mb-2">
                        {{ __('contact.email.paragraph') }}
                    </p>

                    <p class="text-sm font-medium">
                        {{ __('contact.email.address') }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-neutral-200 p-5">
                    <h2 class="font-semibold mb-3">
                        {{ __('contact.hours.title') }}
                    </h2>

                    <p class="text-sm text-neutral-600">
                        {{ __('contact.hours.days') }}<br>
                        {{ __('contact.hours.time') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>