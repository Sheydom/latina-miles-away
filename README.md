# Latina Miles Away

Website for [latinamilesaway.com](https://latinamilesaway.com), which offers guidance services for Latin Americans moving to Australia: resume reviews, document reviews, accommodation and job-search guides, and booked guidance sessions.

## Stack

- **Laravel 13** (PHP 8.5) with Blade components
- **Livewire 4**, used only for `wire:navigate` page transitions
- **Tailwind CSS 4** + **Vite**
- **Swiper** for the services carousel
- **Cal.com** embed for booking consultations
- **Web3Forms** for the contact form (sent from the browser, see `resources/js/app.js`)

## Languages

The site is bilingual. Spanish is the main language at `/...`, English lives at `/en/...`
(see `app/Support/Localization.php` and `routes/web.php`). Link to pages with `lroute('name')` so links stay in the
current language. The language switch (`/lang/{locale}`) opens the same page in the other language and remembers the choice.
Every visible text comes from `resources/lang/{en,es}/*.php`.
When you add text, add the key to **both** language folders.

## Local development

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate        # sessions/cache use the database driver

npm run dev                # Vite dev server
php artisan serve          # http://localhost:8000
```

## Project layout

| Path | What lives there |
|---|---|
| `routes/web.php` | All routes (pages are mostly `Route::view`) |
| `resources/views/home.blade.php` | Home page, built from components |
| `resources/views/services/` | One page per service |
| `resources/views/legal/` | Terms, privacy, refunds, disclaimer |
| `resources/views/components/` | Header, footer, hero, service cards, contact form, ... |
| `resources/js/app.js` | Carousel, certificate modal, Cal.com, contact form |
| `public/downloads/` | Free PDF guides |
| `public/sitemap.xml` | Static sitemap; update it by hand when pages are added |

## Deployment

Pushing to `main` triggers `.github/workflows/deploy.yml` on the self-hosted runner. It pulls the code, runs `composer install`, builds the assets and clears Laravel's caches.
The app runs in Docker (`php-fpm` + Caddy, see `docker-compose.yml` and `Caddyfile`).
