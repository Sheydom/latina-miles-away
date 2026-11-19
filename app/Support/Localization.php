<?php

namespace App\Support;

use Illuminate\Support\Facades\Route;

/**
 * URL-based languages: English pages live at "/...", Spanish pages at "/es/...".
 * Spanish route names are the English ones prefixed with "es." (see routes/web.php).
 */
class Localization
{
    public const LOCALES = ['en', 'es'];

    public const DEFAULT = 'en';

    /** Locale that has a URL prefix, i.e. every locale except the default. */
    public const PREFIXED = 'es';

    /** Language a path belongs to, e.g. "/es/contact" => "es". */
    public static function localeForPath(string $path): string
    {
        return explode('/', trim($path, '/'))[0] === self::PREFIXED ? self::PREFIXED : self::DEFAULT;
    }

    /** Path without the language prefix, e.g. "/es/contact" => "/contact". */
    public static function basePath(string $path): string
    {
        $path = '/'.ltrim($path, '/');

        if ($path === '/'.self::PREFIXED || str_starts_with($path, '/'.self::PREFIXED.'/')) {
            $path = substr($path, strlen(self::PREFIXED) + 1) ?: '/';
        }

        return $path;
    }

    /** Path of the same page in another language. */
    public static function pathFor(string $path, string $locale): string
    {
        $base = self::basePath($path);

        if ($locale !== self::PREFIXED) {
            return $base;
        }

        return '/'.self::PREFIXED.($base === '/' ? '' : $base);
    }

    /**
     * Full URL of the same page in another language. URLs from other sites
     * (e.g. a foreign referer) fall back to the home page.
     */
    public static function urlFor(string $url, string $locale): string
    {
        $parts = parse_url($url);
        $ownHost = parse_url(config('app.url'), PHP_URL_HOST);
        $requestHost = request()->getHost();

        if (isset($parts['host']) && ! in_array($parts['host'], [$ownHost, $requestHost], true)) {
            return url(self::pathFor('/', $locale));
        }

        $query = isset($parts['query']) ? '?'.$parts['query'] : '';

        return url(self::pathFor($parts['path'] ?? '/', $locale)).$query;
    }

    /** Route name for the current language, e.g. "contact" => "es.contact". */
    public static function routeName(string $name): string
    {
        $localized = app()->getLocale() === self::PREFIXED ? self::PREFIXED.'.'.$name : $name;

        return Route::has($localized) ? $localized : $name;
    }

    /** True when the current request is a page that exists in both languages. */
    public static function isTranslatedPage(): bool
    {
        $name = request()->route()?->getName();

        if (! $name) {
            return false;
        }

        $base = str_starts_with($name, self::PREFIXED.'.') ? substr($name, strlen(self::PREFIXED) + 1) : $name;

        return Route::has($base) && Route::has(self::PREFIXED.'.'.$base);
    }

    /**
     * URLs of the current page in every language (for hreflang tags).
     *
     * @return array<string, string>
     */
    public static function alternates(): array
    {
        if (! self::isTranslatedPage()) {
            return [];
        }

        $path = request()->getPathInfo();

        $urls = [];
        foreach (self::LOCALES as $locale) {
            $urls[$locale] = url(self::pathFor($path, $locale));
        }

        return $urls;
    }
}
