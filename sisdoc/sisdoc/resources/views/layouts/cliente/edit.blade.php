{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')
@extends('layouts.cliente.form')
@section('title', 'Clientes')

@section('content_header')
    <h1>Editar Detalhes de {{$cliente->nome}}</h1>

@stop

@section('content')

    <form action="/clientes/{{$cliente->id}}" method="post">




        @section('form')
@method('PATCH')


            <div class="form-group row">
                <button class="btn-default">Salvar</button>
            </div>
    </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
