{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')
@extends('layouts.cliente.form')
@section('title', 'Clientes')

@section('content_header')
    <h1>Detalhes de {{$cliente->nome}}</h1>

@stop

@section('content')

    <form action="clientes" method="post">




        @section('form')

            @if (session('statusAtualizado'))
                <div class="alert alert-success" name="mensagem">
                    {{ session('statusAtualizado') }}
                </div>
            @endif

            <a href="/clientes/{{$cliente->id}}/edit"> Editar {{strtoupper($cliente->nome)}}</a>
    </form>
    <form action='/clientes/{{$cliente->id}}' method='post'>
    @method('DELETE')
@csrf
<button>Delete</button>


    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>


@stop
