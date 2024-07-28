<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SysMail extends Mailable
{
    use Queueable, SerializesModels;
    public $clintData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($clintData)
    {
        //
        $this->clintData = $clintData;
    }

    public function build(){
        return $this->subject('سیستم ثبت قضایای خشونت')
            ->view('email.clintView');
    }
}
