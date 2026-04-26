@php
    $metaTitle = __('homeMeta.title');

    $metaDescription = __('homeMeta.description');

    $ogTitle = $metaTitle;

    $ogDescription = $metaDescription;

    $ogImage = asset('images/lmaLogo.PNG');

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
