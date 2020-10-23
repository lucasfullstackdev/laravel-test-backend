<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewContract extends Mailable
{
    use Queueable, SerializesModels;

    public $emailProprietario;
    public $logradouro;
    public $numero;
    public $bairro;
    public $cidade;
    public $uf;
    public $created_at;

    public $contract;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($propriedade)
    {
        $this->emailProprietario = $propriedade['email_proprietario'];
        $this->logradouro = $propriedade['logradouro'];
        $this->numero = $propriedade['numero'];
        $this->bairro = $propriedade['bairro'];
        $this->cidade = $propriedade['cidade'];
        $this->uf = $propriedade['uf']['nome'];
        $this->created_at = $propriedade['created_at'];

        $this->contract = $propriedade['contract'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.new-contract');
    }
}
