<?php

use App\Support\Localization;

if (! function_exists('lroute')) {
    /**
     * Like route(), but links to the page in the current language:
     * lroute('contact') gives "/contact" in Spanish and "/en/contact" in English.
     */
    function lroute(string $name, mixed $parameters = [], bool $absolute = true): string
    {
        return route(Localization::routeName($name), $parameters, $absolute);
    }
}

if (! function_exists('whatsapp_url')) {
    /**
     * wa.me link with a pre-filled message in the current language,
     * or null when no number is set in config/site.php.
     */
    function whatsapp_url(): ?string
    {
        $number = preg_replace('/\D/', '', (string) config('site.whatsapp'));

        if ($number === '') {
            return null;
        }

        return 'https://wa.me/'.$number.'?text='.rawurlencode(__('cta.whatsapp_text'));
    }
}
