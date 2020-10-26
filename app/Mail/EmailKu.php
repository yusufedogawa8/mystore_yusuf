<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailKu extends Mailable
{
    use Queueable, SerializesModels;
    public $massage;
    /**
     * Create a new massage instance.
     *
     * @return void
     */
    public function __construct($massage)
    {
        $this->massage = $massage;
    }

    /**
     * Build the massage.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from Fake Ghuroba')
                    ->view('massage');
    }
}
