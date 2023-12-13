<?php

namespace Ng\FilamentSeo;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentSeoPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-seo';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
