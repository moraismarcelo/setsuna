@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')

@stop

@section('content')


<h1>Lista de Produtos</h1>

    <a class="btn btn-app" href="/produtos/create">
        <span class="badge bg-green">+</span>
        <i class="fa fa-barcode"></i> Adicionar Produto
    </a>
        <div class="box">

        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table id="example1" class="table table-bordered table-hover">
                <thead class="bg-aqua-active">
                <tr>
                    <th> ID </th>
                    <th> CÓDIGO </th>
                    <th> NOME </th>
                    <th> DESCRIÇÃO </th>
                    <th> MARCA </th>
                    <th> MODELO </th>
                    <th> QUANT. </th>
                    <th> VLR. CUSTO </th>
                    <th> VLR. VENDA </th>
                    <th> AÇÃO </th>

                </tr>
                </thead>

                @foreach($produtos as $produto)
                <tr>
                    <th>{{$produto->id}}</th>
                    <th>{{$produto->codigobarras}}</th>
                    <th>{{Str::limit($produto->nome,30)}}</th>
                    <th>{{Str::limit($produto->descricao,40)}}</th>
                    <th>{{$produto->marca}}</th>
                    <th>{{$produto->modelo}}</th>
                    <th>{{$produto->quantidade}} UND</th>
                    <th>R$ {{number_format($produto->valorCusto,2,',','.')}}</th>
                    <th>R$ {{number_format($produto->valorVenda,2,',','.')}}</th>

                    <th>
                        <form action="/produtos/{{$produto->id}}" method="POST">
                        <a class="btn btn-xs btn-primary" href="/produtos/{{$produto->id}}"><i class="fa fa-edit"></i>Editar</a>


                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Excluir</button>

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










