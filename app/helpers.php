<?php

use App\Support\Localization;

if (! function_exists('lroute')) {
    /**
     * Like route(), but links to the page in the current language:
     * lroute('contact') gives "/contact" in English and "/es/contact" in Spanish.
     */
    function lroute(string $name, mixed $parameters = [], bool $absolute = true): string
    {
        return route(Localization::routeName($name), $parameters, $absolute);
    }
}
