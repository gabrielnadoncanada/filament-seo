<?php

namespace Ng\FilamentSeo\Commands;

use Illuminate\Console\Command;

class FilamentSeoCommand extends Command
{
    public $signature = 'filament-seo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
