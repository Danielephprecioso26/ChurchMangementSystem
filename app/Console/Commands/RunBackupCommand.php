<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RunBackupCommand extends Command
{
    protected $signature = 'backup:run-command';

    protected $description = 'Run backup command';

    public function handle()
    {
        $output = Artisan::call('backup:run');

        // Check the output or handle the backup completion logic
    }
}
