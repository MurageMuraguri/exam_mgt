<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendLecOnExamCreate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $exam;
    public $deadline_1;
    public $deadline_2;

    public function __construct($exam,$deadline_1,$deadline_2)
    {
        $this->exam = $exam;
        $this->deadline_1 = $deadline_1;
        $this->deadline_2 = $deadline_2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@exammgt.ke','Exam Manager')
        ->subject('New Examination assignment')
        ->markdown('emails.sendLecOnExamCreate',
            [
                'exam' => $this->exam,
                'deadline_1' => $this->deadline_1,
                'deadline_2' => $this->deadline_2
            ]);
    }
}
