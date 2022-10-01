<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuizMail extends Mailable
{
  use Queueable, SerializesModels;

  public $details, $file;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($details, $file)
  {
    $this->details = $details;
    $this->file = $file;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    if ($this->file) {
      return $this->subject('Email from Koinoti Nav')->view('emails.quiz-result')->attach(
        $this->file->getRealPath(),
        [
          'as' => $this->file->getClientOriginalName(),
          'mime' => $this->file->getClientMimeType(),
        ]
      );
    }

    return $this->subject('Email from Koinoti Nav')->view('emails.quiz-result');
  }
}
