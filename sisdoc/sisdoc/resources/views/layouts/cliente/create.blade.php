{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')
@extends('layouts.cliente.form')
@section('title', 'Clientes')

@section('content_header')
    <h1>Adicionar Clientes</h1>

@stop

@section('content')


    <form action="/clientes" method="post">


    @section('form')



    </form>


    <div class="form-group row">
        <button class="btn-default">Salvar</button>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
