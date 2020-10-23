@component('mail::message')
<h1 style="text-align: center;">Remoção de Contrato</h1>

# Dados do Contrato
<b>Nome do contratante</b>: {{ $contract['nome_contratante'] }} <br>
<b>Tipo de Pessoa</b>: {{ $contract['tipo_pessoa'] }} <br>
<b>Documento</b>: {{ $contract['documento'] }} <br>
<b>E-mail do contratante</b>: {{ $contract['email_contratante'] }} <br>

# Dados do Imóvel

<b>Proprietário</b>: {{ $emailProprietario }} <br>
<b>Logradouro</b>: {{ $logradouro }} <br>
<b>Número</b>: {{ $numero }} <br>
<b>Bairro</b>: {{ $bairro }} <br>
<b>Cidade</b>: {{ $cidade }} <br>
<b>Estado</b>: {{ $uf }} <br>
<b>Horário da Remoção</b>: {{ $deleted_at }}

@component('mail::button', ['url' => 'https://accordous.com.br/'])
Conheça mais sobre a Accordous
@endcomponent

<br>

<p style="font-size: .7em;">
    Este e-mail é disparado automaticamente após a confirmação de exclusão do contrato. <br>
    Não responder este e-mail
</p>

<br>

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent
