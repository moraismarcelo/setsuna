@extends('adminlte::page')

@section('title', 'Adicionar Produto')

@section('content_header')

@stop

@section('content')

    <h1>Adicionar Produto</h1>

@include('produtos._form')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop










