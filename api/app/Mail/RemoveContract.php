<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RemoveContract extends Mailable
{
    use Queueable, SerializesModels;

    public $emailProprietario;
    public $logradouro;
    public $numero;
    public $bairro;
    public $cidade;
    public $uf;
    public $deleted_at;

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
        $this->deleted_at = $propriedade['deleted_at'];

        $this->contract = $propriedade['contract'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.remove-contract');
    }
}
