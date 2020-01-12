@extends('adminlte::page')

@section('title', 'Adicionar Venda')

@section('content_header')

@stop

@section('content')

    <h1>Adicionar Venda</h1>

@include('vendas._form')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop










