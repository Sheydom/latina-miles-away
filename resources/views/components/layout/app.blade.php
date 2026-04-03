<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="Your Guide to Australia">
    <title>Latina Miles Away</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('lma.svg') }}">
</head>

<body class="min-h-screen flex bg-white flex-col font-sans">
    <x-header />
    <main class="grow flex flex-col items-center bg-soft px-2.5">{{ $slot }}</main>
    <x-footer />
</body>

</html>
