<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class seedcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seedcommand:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (DB::select('SHOW TABLES') as $value) {
            foreach ($value as $tableName) {
                if (!in_array($tableName, ['migrations', 'password_resets'])) {
                    Artisan::call('iseed', [
                        'tables' => $tableName,
                        '--force' => true,
                    ]);
                    $this->info('Table ' . $tableName . ' - Done!');
                }
            }
        }
    }
}
