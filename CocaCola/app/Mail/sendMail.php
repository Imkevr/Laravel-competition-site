<?php

namespace App\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $winnersposts = DB::select('select post_id from winners group by post_id');
        $posts = DB::select('select * from posts ');

        $this->winnerposts =$winnersposts;
        $this->posts=$posts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this ->from('ivanrompa@gmail.com')
                     ->to('imke.vanrompa@student.kdg.be')
                     ->subject('test')
                     ->view('emails.template');
    }
}
