<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $applicantData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicantData)
    {
        $file = $applicantData['file'];
        $data = $applicantData['data'];
        $exe = $applicantData['exe'];
        $this->exe = $exe;
        $this->data = $data;
        $this->file = base64_encode($file);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Resume')
                    ->view('admin.career.mail')->attachData(base64_decode($this->file), 'Resume.'.$this->exe, [
                            'mime' => 'application/'.$this->exe,
                        ]);
    }
}
