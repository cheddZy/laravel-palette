<?php

namespace Cheddzy\LaravelPalette;

use Cheddzy\LaravelPalette\Commands\LaravelPaletteCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPaletteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-palette')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_palette_table')
            ->hasCommand(LaravelPaletteCommand::class);
    }
}
