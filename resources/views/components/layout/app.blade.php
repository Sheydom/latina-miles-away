@props([
    'metaTitle' => 'Move to Australia Guidance | Latina Miles Away',
    'metaDescription' => 'Move to Australia with confidence. Resume reviews and practical guidance.',
    'robots' => 'index, follow',
    'canonical' => null,
    'ogTitle' => null,
    'ogDescription' => null,
    'ogImage' => null,
    'ogUrl' => null,
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>




<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="robots" content="{{ $robots }}">
    <title>{{ $metaTitle ?? 'Move to Australia Guidance | Latina Miles Away' }}</title>

    <meta property="og:title" content="{{ $ogTitle ?? $metaTitle }}">
    <meta property="og:description" content="{{ $ogDescription ?? $metaDescription }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-home.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Latina Miles Away preview image">
    <meta property="og:url" content="{{ $ogUrl ?? url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Latina Miles Away">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $ogTitle ?? $metaTitle }}">
    <meta name="twitter:description" content="{{ $ogDescription ?? $metaDescription }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('images/lmaLogo.png') }}">



    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('lma.svg') }}">
    <link rel="preconnect" href="https://app.cal.com">
    <link rel="dns-prefetch" href="https://app.cal.com">
</head>

<body id="home" class="min-h-screen flex bg-white flex-col font-sans">
    <x-header />
    <main class="grow flex flex-col items-center bg-soft">{{ $slot }}</main>
    <x-footer />
</body>

</html>
