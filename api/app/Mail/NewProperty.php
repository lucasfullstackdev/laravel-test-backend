<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewProperty extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $emailProprietario;
    public $logradouro;
    public $numero;
    public $bairro;
    public $cidade;
    public $uf;
    public $created_at;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($propriedade)
    {
        $this->title = "Registro de Imóvel";
        $this->emailProprietario = $propriedade['email_proprietario'];
        $this->logradouro = $propriedade['logradouro'];
        $this->numero = $propriedade['numero'];
        $this->bairro = $propriedade['bairro'];
        $this->cidade = $propriedade['cidade'];
        $this->uf = $propriedade['uf']['nome'];
        $this->created_at = $propriedade['created_at'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.new-property');
    }
}
