{{-- Testimonials (hidden while resources/lang/{en,es}/testimonials.php has no items) --}}
@php($items = __('testimonials.items'))

@if (is_array($items) && count($items) > 0)
    <section class="mb-10 w-full px-4 py-10" aria-labelledby="testimonials-title">
        <div class="mx-auto max-w-6xl">
            <div class="mb-8 text-center">
                <h2 id="testimonials-title">{{ __('testimonials.title') }}</h2>
                <p class="mt-2 text-neutral-700">{{ __('testimonials.subtitle') }}</p>
            </div>

            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($items as $item)
                    <figure class="flex flex-col rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm">
                        <svg class="mb-3 h-7 w-7 text-tertiary" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M4 18h5l2-4V6H4v8h3l-3 4zm9 0h5l2-4V6h-7v8h3l-3 4z" />
                        </svg>
                        <blockquote class="grow text-neutral-800">
                            “{{ $item['quote'] }}”
                        </blockquote>
                        <figcaption class="mt-4 text-sm">
                            <span class="font-semibold text-black">{{ $item['name'] }}</span>
                            @if (! empty($item['detail']))
                                <span class="block text-neutral-500">{{ $item['detail'] }}</span>
                            @endif
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>
@endif
