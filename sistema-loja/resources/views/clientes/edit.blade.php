@extends('adminlte::page')

@section('title', 'Detalhes de '. $cliente->nome)

@section('content_header')

@stop

@section('content')

    <h3>Editar cliente {{$cliente->nome}}</h3>
    <div class="box box-success">

    <form action="/clientes/{{$cliente->id}}" method="POST">

        @method('PATCH')

        @include('clientes._form')

        <div class="box-footer">

            <button type="submit" name="action" value="save" class="btn btn-primary">Salvar cliente</button>


            <button  type="button" class="btn btn-danger"><a href="/clientes"><span style="color: white">Cancelar</span></a></button>

        </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop










