<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailProject extends Mailable
{
    use Queueable, SerializesModels;

    protected $project;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->project = $project;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->subject('Добавлен новый проект на мониторинг')->view('email.email3')->with([
      'name' => $this->project->name,
      'name' => $this->project->name,
      'email' => $this->project->email,
      'image' => $this->project->image,
      'slug' => $this->project->slug,
    
      'created_at' => $this->project->created_at,
      ]);
    }
}
