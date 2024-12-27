<?php

namespace Cheddzy\LaravelPalette\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cheddzy\LaravelPalette\LaravelPalette
 */
class LaravelPalette extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Cheddzy\LaravelPalette\LaravelPalette::class;
    }
}
