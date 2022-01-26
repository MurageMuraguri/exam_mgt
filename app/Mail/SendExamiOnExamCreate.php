<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendExamiOnExamCreate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $exam;
    public $deadline;

    public function __construct($exam,$deadline)
    {
        $this->exam = $exam;
        $this->deadline = $deadline;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@exammgt.ke','Exam Manager')
            ->subject('New Examination review assignment')
            ->markdown('emails.sendExamiOnExamCreate',
                [
                    'exam' => $this->exam,
                    'deadline' => $this->deadline,
                ]);
    }
}
