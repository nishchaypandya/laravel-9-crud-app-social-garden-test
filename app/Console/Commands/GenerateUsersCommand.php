<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */

     public function handle()
{
    factory(App\User::class, 10)->create();
    $this->info('10 users were generated successfully!');
}
}
