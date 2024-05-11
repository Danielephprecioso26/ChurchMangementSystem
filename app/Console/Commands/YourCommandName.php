<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class YourCommandName extends Command
{
    protected $signature = 'php artisan backup:run';  // The signature to trigger the command

    protected $description = 'wala lang';

    public function handle()
    {
        // Command logic goes here
        $this->info('Command executed successfully.');
    }
}
