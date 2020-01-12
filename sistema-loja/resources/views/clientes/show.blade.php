@extends('adminlte::page')

@section('title', 'Detalhes de '. $cliente->nome)

@section('content_header')

@stop

@section('content')

    <h3>Detalhes de  {{$cliente->nome}}</h3>

    <div class="box box-success">




        <style type="text/css">
            .input-group-addon { width: 100px; }
            .input-group { width: 100%; }
        </style>

        <br>


        <div class="box-body">

            <div class="input-group">
                <span class="input-group-addon text-bold">Nome</span>
                <input disabled class="form-control input-sm" aria-describedby="basic-addon1  onkeyup=" this.value = this.value.toUpperCase();" name="nome" type="text" id="nome" value="{{ old('nome') ?? $cliente->nome }}">
            </div>


            <br>

            <div class="input-group">
                <span class="input-group-addon text-bold">CPF</span>
                <input disabled class="form-control input-sm" maxlength="14" aria-describedby="basic-addon1 onkeyup=" this.value = this.value.toUpperCase();" name="cpf" type="text" id="cpf" placeholder="XXX.XXX.XXX-XX" value="{{old('cpf',$cliente->cpf)}}">
            </div>

            <br>

            <div class="input-group">
                <span class="input-group-addon text-bold">E-mail</span>
                <input disabled class="form-control input-sm" onkeyup="this.value = this.value.toUpperCase();" name="email" type="email" id="email" value="{{ old('email') ?? $cliente->email }}">
            </div>

            <br>

            <div class="input-group">
                <span class="input-group-addon text-bold">DDD 1</span>
                <input disabled maxlength="2" class="form-control input-sm" name="ddd1" type="text" id="ddd1" value="{{ old('ddd1',$cliente->ddd1) }}">
            </div>

            <br>
            <div class="input-group">
                <span class="input-group-addon text-bold">Telefone 1</span>
                <input disabled placeholder="XXXXX-XXXX" maxlength="9" class="form-control input-sm" name="telefone1" type="text" id="telefone1" value="{{ old('telefone1',$cliente->telefone1)}}">
            </div>








        </div>

        <div class="box-footer">

            <a class="btn btn-xl btn-primary" href="/clientes/{{$cliente->id}}/edit"><i class="fa fa-edit"></i> Editar</a>

            <a class="btn btn-xl btn-danger" href="/clientes"><i class="fa fa-arrow-left"></i> Voltar</a>

        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop










