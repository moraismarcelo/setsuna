@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')

@stop

@section('content')

    <h1>Lista de Clientes</h1>
    <a class="btn btn-app" href="/clientes/create">
        <span class="badge bg-green">+</span>
        <i class="fa fa-user"></i> Adicionar Cliente
    </a>

    <div class="box">

        <div class="box-body table-responsive no-padding">
            <table id="example1" class="table table-bordered table-hover">
                <thead class="bg-aqua-active">
                <tr>
                    <th> ID </th>
                    <th> NOME </t   h>
                    <th> CPF </th>
                    <th> EMAIL </th>
                    <th> DDD1 </th>
                    <th> TELEFONE1 </th>
                    <th> AÇÃO </th>

                </tr>
                </thead>

                @foreach($clientes as $cliente)
                    <tr>
                        <th>{{$cliente->id}}</th>
                        <th>{{Str::limit($cliente->nome,30)}}</th>
                        <th>{{$cliente->cpf}}</th>
                        <th>{{$cliente->email}}</th>
                        <th>{{$cliente->ddd1}}</th>
                        <th>{{$cliente->telefone1}}</th>

                        <th>

                            <form action="/clientes/{{$cliente->id}}" method="POST">

                                <a class="btn btn-xs btn-success" href="/clientes/{{$cliente->id}}"><i class="fa fa-history"></i>Histórico</a>

                                <a class="btn btn-xs btn-primary" href="/clientes/{{$cliente->id}}"><i class="fa fa-edit"></i>Detalhes</a>

                                <button type="submit" id="vtnc" class="btn btn-xs btn-danger"><i class="fa fa-remove" ></i>Excluir</button>

                                @method('DELETE')
                                @csrf

                            </form>
                        </th>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

    <script>
        $(document).ready(function(){
            $("form").submit(function(){

                event.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-success'
                    },
                    buttonsStyling: false,
                })

                swalWithBootstrapButtons.fire({
                    title: 'Tem certeza que deseja excluir o registro?',
                    text: "Esta ação não poderá ser desfeita!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, Deletar!',
                    cancelButtonText: 'Não, cancelar!',
                    reverseButtons: true
                }).then((result) => {

                    if (result.value)  {


                    $(this).submit();





                } else if (
                    // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelado',
                        'Nenhuma alteração foi feita',
                        'error'
                    )
                }

            })



            });

        });
    </script>



@stop










