<?php

declare(strict_types=1);

namespace SoftLand\ThemeBuilderCms;

use Illuminate\Support\ServiceProvider;
use SoftLand\ThemeBuilder\Support\ThemePackageManager;

/**
 * Registers the CMS theme package with the theme builder: its preset
 * (presets/cms.json), its pages (post/page), and its packaged stylesheet.
 */
class CmsThemeProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->make(ThemePackageManager::class)->register(dirname(__DIR__));

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/css/theme.css' => public_path('themes/cms/theme.css'),
            ], 'theme-builder-theme-cms');
        }
    }
}
