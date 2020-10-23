@component('mail::message')
<h1 style="text-align: center;">{{ $title }}</h1>

# Dados do imóvel

<b>Proprietário</b>: {{ $emailProprietario }} <br>
<b>Logradouro</b>: {{ $logradouro }} <br>
<b>Número</b>: {{ $numero }} <br>
<b>Bairro</b>: {{ $bairro }} <br>
<b>Cidade</b>: {{ $cidade }} <br>
<b>Estado</b>: {{ $uf }} <br>
<b>Hora do registro</b>: {{ $created_at }}

@component('mail::button', ['url' => 'https://accordous.com.br/'])
Conheça mais sobre a Accordous
@endcomponent

Atenciosamente,<br>
{!! config('app.name') !!}
@endcomponent
