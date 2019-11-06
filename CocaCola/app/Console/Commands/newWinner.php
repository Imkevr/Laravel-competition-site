<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
use App\User;
use App\Post;

class newWinner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'do:newwinner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Select a new winner';

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

        echo "start select winning post";
        $outcome = DB::select('select post_id, COUNT(post_id) from post_user group by post_id desc');
        $winner= $outcome[0];
        print_r($winner);
        DB::table('winners')->insert([
             ['post_id' => $winner->post_id],
             ]);
         print_r('winning post is '.$winner->post_id);
    }
}
