@component('mail::message')
<h1 style="text-align: center;">Registro de Imóvel</h1>

# Dados do imóvel

<b>Proprietário</b>: {{ $emailProprietario }} <br>
<b>Logradouro</b>: {{ $logradouro }} <br>
<b>Número</b>: {{ $numero }} <br>
<b>Bairro</b>: {{ $bairro }} <br>
<b>Cidade</b>: {{ $cidade }} <br>
<b>Estado</b>: {{ $uf }} <br>
<b>Horário do registro</b>: {{ $created_at }}

@component('mail::button', ['url' => 'https://accordous.com.br/'])
Conheça mais sobre a Accordous
@endcomponent

<br>

<p style="font-size: .7em;">
    Este e-mail é disparado automaticamente após a adição de um novo imóvel. <br>
    Não responder este e-mail
</p>

<br>

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
