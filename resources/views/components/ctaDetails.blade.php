{{--
    Shown under a "Book your consultation" button: what it costs and how long
    it takes, plus easier first steps (free guides, WhatsApp).
    tone="light" for dark backgrounds, tone="dark" for light backgrounds.
--}}
@props(['tone' => 'dark'])

@php
    $muted = $tone === 'light' ? 'text-white/85' : 'text-neutral-700';
    $link = $tone === 'light'
        ? 'text-white underline decoration-white/50 underline-offset-4 hover:decoration-white'
        : 'text-black underline decoration-black/30 underline-offset-4 hover:decoration-black';
    $whatsapp = whatsapp_url();
@endphp

<div {{ $attributes->merge(['class' => 'mt-3 text-sm ' . $muted]) }}>
    <p class="flex flex-wrap items-center gap-x-2 gap-y-1">
        <span class="font-semibold">
            {{ __('cta.details', ['minutes' => config('site.consultation.minutes'), 'price' => config('site.consultation.price')]) }}
        </span>
        <span aria-hidden="true">·</span>
        <span class="inline-flex items-center gap-1">
            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="5" y="11" width="14" height="10" rx="2" />
                <path d="M8 11V7a4 4 0 0 1 8 0v4" />
            </svg>
            {{ __('cta.secure') }}
        </span>
        <span aria-hidden="true">·</span>
        <span>{{ __('cta.confidential') }}</span>
    </p>

    <p class="mt-3 flex flex-wrap items-center gap-x-3 gap-y-1">
        <span>{{ __('cta.or') }}</span>
        <a href="{{ lroute('services.startHere') }}" wire:navigate.hover class="font-semibold {{ $link }}">{{ __('cta.free_guides') }}</a>
        @if ($whatsapp)
            <span class="whitespace-nowrap">
                <span class="mr-2 hidden sm:inline" aria-hidden="true">·</span>
                <a href="{{ $whatsapp }}" target="_blank" rel="noopener noreferrer"
                    class="font-semibold {{ $link }}">{{ __('cta.whatsapp') }}</a>
            </span>
        @endif
    </p>
</div>
