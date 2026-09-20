# softlandtech/theme-builder-cms

The **CMS / blog / magazine** theme package for
[`softlandtech/theme-builder`](../../laravel-theme-builder). It ships an
editorial starter theme — editor's-pick hero, latest-posts grid, topic
browser, about text, newsletter — plus the pages those sites need
(article / static page).

## Install

**By clone (no composer needed):**

```bash
git clone https://github.com/SoftLand-Tech/theme-builder-cms theme-builder-themes/theme-builder-cms
php artisan theme-builder:seed-preset cms
```

The core package discovers everything under `theme-builder-themes/`
(configure the directory via `theme-builder.themes_path`). Update anytime
with `git pull` inside the clone, then re-seed.

**By composer:**

```bash
composer require softlandtech/theme-builder-cms
php artisan theme-builder:seed-preset cms
```

**Or the installer** — `php artisan theme-builder:install` detects CMS/blog
apps (Post / Page models, blog routes…), suggests this package, and clones
it for you when you pick it.

## What's inside

```
theme-builder.json    manifest: site_types, pages (post/page), routes_map
presets/cms.json      the starter theme
resources/css/theme.css   packaged overrides, scoped under .theme-cms
src/CmsThemeProvider.php
```

## Customizing

- **In the editor** — open `/builder/themes/{id}/edit` and change anything.
- **As a new preset** — `php artisan theme-builder:make-theme mine --from=cms`,
  edit `database/presets/mine.json`, then
  `php artisan theme-builder:validate mine && php artisan theme-builder:seed-preset mine`.
- **CSS overrides** — scoped under `.theme-cms` in `resources/css/theme.css`
  (published to `public/themes/cms/theme.css`).
- **Per-block Blade overrides** —
  `resources/views/components/themes/cms/blocks/<block>.blade.php` in the host.

## Data

Article blocks render through the host's `StorefrontDataProvider`
(`blogPost`, `blogPosts`, `blogCategories`) — bind one to show real content
(see the core package README).

## License

MIT.
