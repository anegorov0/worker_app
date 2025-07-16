<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command develops';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dd(11111);
    }
}
