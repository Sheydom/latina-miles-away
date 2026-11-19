{{-- Frequently asked questions + FAQPage structured data (texts in resources/lang/{en,es}/faq.php) --}}
@php
    $replace = [
        ':minutes' => config('site.consultation.minutes'),
        ':price' => config('site.consultation.price'),
        ':refunds_url' => lroute('legal.refunds'),
        ':privacy_url' => lroute('legal.privacy'),
    ];
    $faqs = collect(__('faq.items'))->map(fn ($item) => [
        'q' => $item['q'],
        'a' => strtr($item['a'], $replace),
    ]);
@endphp

@if ($faqs->isNotEmpty())
    <section class="mb-10 w-full px-4 py-10" aria-labelledby="faq-title">
        <div class="mx-auto max-w-3xl">
            <div class="mb-8 text-center">
                <h2 id="faq-title">{{ __('faq.title') }}</h2>
                <p class="mt-2 text-neutral-700">{{ __('faq.subtitle') }}</p>
            </div>

            <div class="divide-y divide-neutral-200 rounded-2xl border border-neutral-200 bg-white shadow-sm">
                @foreach ($faqs as $faq)
                    <details class="group p-5">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold text-black [&::-webkit-details-marker]:hidden">
                            {{ $faq['q'] }}
                            <svg class="h-5 w-5 shrink-0 text-primary transition group-open:rotate-45"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                stroke-linecap="round" aria-hidden="true">
                                <path d="M12 5v14M5 12h14" />
                            </svg>
                        </summary>
                        <p class="mt-3 text-neutral-700">{!! $faq['a'] !!}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    @push('head')
        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => $faqs->map(fn ($faq) => [
                    '@type' => 'Question',
                    'name' => $faq['q'],
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($faq['a'])],
                ])->values(),
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}
        </script>
    @endpush
@endif
