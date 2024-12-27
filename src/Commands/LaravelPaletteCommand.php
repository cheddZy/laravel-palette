<?php

namespace Cheddzy\LaravelPalette\Commands;

use Illuminate\Console\Command;

class LaravelPaletteCommand extends Command
{
    public $signature = 'laravel-palette';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
