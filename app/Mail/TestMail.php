<?php

namespace App\Mail;

use App\Models\Mail\MyTest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $test;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($test)
    {
        $this->test = $test;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("admin@dast.tech","Admin")->
        subject("Testing the microphone")->
        replyTo("admin@dast.tech","admin")->
        to($this->test['email'], $this->test['name'])->
        view('mails.test');
    }
}
