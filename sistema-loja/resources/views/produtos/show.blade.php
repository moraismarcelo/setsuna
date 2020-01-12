@extends('adminlte::page')

@section('title', 'Detalhes de '. $produto->nome)

@section('content_header')

@stop

@section('content')

@include('produtos._form')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop










