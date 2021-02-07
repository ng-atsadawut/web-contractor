<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Article $article)
    {
        //เราสามารถส่ง Parameter มาจากที่อื่นได้โดยใช้ Constructor รับค่า
        $this->article = $article;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //เวลาใช้งานดึงการแสดงผลจาก View เหมือนกับ Controller ทั่วไป
        $article = $this->article;
        return $this->subject('This is my Test Mail Subject')
                    ->view('emails/mail', compact('article') );
    }
}
