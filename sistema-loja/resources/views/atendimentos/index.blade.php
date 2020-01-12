@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


    <h1>ESCOLHA O ATENDIMENTO</h1>




    <div class="box box-body">


            <a class="btn btn-lg btn-app" href="/vendas/create"><i class="fa fa-opencart"></i>Venda</a>

            <a class="btn btn-lg btn-app" href="/orcamentos/"><i class="fa fa-handshake-o"></i>Orçamento</a>


    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop










