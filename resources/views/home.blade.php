@php
    $metaTitle = 'Move to Australia Guidance | Latina Miles Away';

    $metaDescription =
        'Move to Australia with confidence. Get resume reviews, visa guidance, and practical support based on real-life migration experience.';

    $ogTitle = $metaTitle;

    $ogDescription = $metaDescription;

    $ogImage = asset('images/home.png');

    $ogUrl = 'https://latinamilesaway.com';
@endphp
<x-layout.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <x-hero />
    <x-services />
    <x-trust />
    <x-secure />
    <x-lastCallToAction />
</x-layout.app>
