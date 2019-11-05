<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Database;

class contestDuration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:winner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will select a daily contest winner';

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
     * @return mixed
     */
    public function handle()
    {
      // $outcome = DB::select('select post_id, COUNT(post_id) from post_user group by post_id');
            alert("Schedueled task done! well donzo");

    }
}
