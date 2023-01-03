<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\usuariosModel;

class ObrigadoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $hash = usuariosModel::where("email", $this->email)->pluck("passwd_snh");
        $arrDados = [
            "link" => $hash
        ];
        return $this->from("curso@laravelfullstack.com.br", "Laravel Fullstack")
        ->view('mails.obrigado')->with($arrDados)
        ->subject("Reserva de Vaga");
    }
}
