<?php

namespace App\Http\Middleware;

use App\Support\Localization;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

/**
 * Pages: the URL decides the language ("/es/..." is Spanish, everything else English).
 * Visitors who chose Spanish with the language switch are sent to the Spanish
 * version when they open an English page URL.
 * Other routes (e.g. /lang/{locale}) use the language saved in the session.
 */
class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! Localization::isTranslatedPage()) {
            $locale = session('locale', config('app.locale'));
            App::setLocale(in_array($locale, Localization::LOCALES, true) ? $locale : Localization::DEFAULT);

            return $next($request);
        }

        $locale = Localization::localeForPath($request->getPathInfo());

        if (
            $locale === Localization::DEFAULT
            && session('locale') === Localization::PREFIXED
            && $request->isMethod('GET')
        ) {
            return redirect()->to(Localization::urlFor($request->fullUrl(), Localization::PREFIXED));
        }

        App::setLocale($locale);

        return $next($request);
    }
}
