<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $siteUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->siteUrl = env('app_url');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact')
                    ->with([
                        'message' => 'Hello World'
                    ]);
    }
}
