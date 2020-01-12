@extends('adminlte::page')

@section('title', 'Adicionar Cliente')

@section('content_header')

@stop

@section('content')

    <h1>Adicionar Cliente</h1>

    <div class="box box-success">

    <form action="/clientes" method="POST">


@include('clientes._form')


        <div class="box-footer">
            <button type="submit" name="action" value="save" class="btn btn-primary">Salvar cliente</button>
            <button type="submit" name="action" value="saveandcontinue" class="btn btn-info">Salvar e Adicionar Mais</button>
            <button id="cancelar" type="button" class="btn btn-danger"><a href="/clientes"><span style="color: white">Cancelar</span></a></button>

        </div>

    </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop










