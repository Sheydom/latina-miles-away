@php
    $metaTitle = __('homeMeta.title');

    $metaDescription = __('homeMeta.description');

    $ogTitle = $metaTitle;

    $ogDescription = $metaDescription;

    $ogImage = asset('images/lmaLogo.png');

    $ogUrl = lroute('home');
@endphp
<x-layout.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    @push('head')
        {{-- Structured data: tells Google who runs the business --}}
        <script type="application/ld+json">
            {!! json_encode([
                '@context' => 'https://schema.org',
                '@type' => 'ProfessionalService',
                'name' => 'Latina Miles Away',
                'url' => 'https://latinamilesaway.com',
                'logo' => asset('images/lmaLogo.png'),
                'image' => asset('images/profile.webp'),
                'description' => __('homeMeta.description'),
                'areaServed' => 'AU',
                'availableLanguage' => ['en', 'es'],
                'founder' => [
                    '@type' => 'Person',
                    'name' => 'Sheyla Solis Bolivar',
                    'image' => asset('images/profile.webp'),
                    'jobTitle' => 'Founder',
                ],
                'sameAs' => [
                    'https://www.instagram.com/latinamilesaway/',
                    'https://www.facebook.com/profile.php?id=61586298837478',
                    'https://www.youtube.com/channel/UCL-sctm-CPn4jHf8nypSocQ',
                    'https://www.tiktok.com/@latinamilesaway',
                ],
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}
        </script>
    @endpush
    <x-hero />
    <x-services />
    <x-trust />
    <x-testimonials />
    <x-secure />
    <x-faq />
    <x-lastCallToAction />
</x-layout.app>
