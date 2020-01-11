@extends('layout.layout')
@section('conteudo')
<h1>Clientes</h1>


<ul>

  @foreach ($clientes as $cliente)

  <li>{{$cliente->nome}}</li>

  @endforeach
</ul>

@endsection
