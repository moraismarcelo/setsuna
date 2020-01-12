<style type="text/css">
    .input-group-addon { width: 130px; }

    .input-group { width: 100%; }
</style>

<form action="/produtos" method="POST">
<div class="box box-success">



    <div class="box-body">

        <div class="input-group">
                <span class="input-group-addon text-bold">Código de Barras</span>
                <input class="form-control input-sm"  onkeyup="this.value = this.value.toUpperCase();" name="codigobarras" type="text" id="codigobarras" maxlength="50" value="{{ old('codigobarras') ?? $produto->codigobarras }}">
        </div>
                <div><span style="color: red">{{ $errors->first('codigobarras') }}</span></div>
        <br>

        <div class="input-group">
                <span class="input-group-addon text-bold">Nome</span>
                <input class="form-control input-sm"  onkeyup="this.value = this.value.toUpperCase();" name="nome" type="text" id="nome" placeholder="" value="{{ old('nome') ?? $produto->nome }}">
        </div>
            <div><span style="color: red">{{ $errors->first('nome') }}</span></div>
        <br>

        <div class="input-group">
            <span class="input-group-addon text-bold">Descrição</span>
        <input class="form-control input-sm" onkeyup="this.value = this.value.toUpperCase();" name="descricao" type="text" id="descricao" placeholder="" value="{{ old('descricao') ?? $produto->descricao }}">
        </div>
            <div><span style="color: red">{{ $errors->first('descricao') }}</span></div>

        <br>

        <div class="input-group">
            <span class="input-group-addon text-bold">Marca</span>
        <input class="form-control input-sm" onkeyup="this.value = this.value.toUpperCase();" name="marca" type="text" id="marca" placeholder=""value="{{ old('marca') ?? $produto->marca }}">
        </div>
            <div><span style="color: red">{{ $errors->first('marca') }}</span></div>

        <br>

        <div class="input-group">
            <span class="input-group-addon text-bold">Modelo</span>
        <input class="form-control input-sm" onkeyup="this.value = this.value.toUpperCase();" name="modelo" type="text" id="modelo" placeholder=""value="{{ old('modelo') ?? $produto->modelo }}">
        </div>
            <div><span style="color: red">{{ $errors->first('modelo') }}</span></div>

        <br>
        
        <div class="input-group">
            <span class="input-group-addon text-bold">Quantidade</span>
        <input class="form-control input-sm" name="quantidade" type="text" id="quantidade" placeholder=""value="{{ old('quantidade') ?? $produto->quantidade }}">
        </div>
            <div><span style="color: red">{{ $errors->first('quantidade') }}</span></div>

        <br>

        <div class="input-group">
            <span class="input-group-addon text-bold">Valor de Custo</span>
        <input class="form-control input-sm" step="0.01" min="0" name="valorCusto" type="text" id="valorCusto" placeholder="R$ XX,XX"value="{{ old('valorCusto') ?? $produto->valorCusto }}">
        </div>
            <div><span style="color: red">{{ $errors->first('valorCusto') }}</span></div>

        <br>

        <div class="input-group">
            <span class="input-group-addon text-bold">Valor de Venda</span>
        <input class="form-control input-sm" step="0.01" min="0" name="valorVenda" type="text" id="valorVenda" placeholder="R$ XX,XX"value="{{ old('valorVenda') ?? $produto->valorVenda }}">
        </div>
            <div><span style="color: red">{{ $errors->first('valorVenda') }}</span></div>



    </div>
        <div class="box-footer">

            <button type="submit" name="action" value="save" class="btn btn-primary">Salvar Produto</button>
            <button type="submit" name="action" value="saveandcontinue" class="btn btn-info">Salvar e Adicionar Mais</button>
            <button id="cancelar" type="button" class="btn btn-danger"><a href="/produtos"><span style="color: white">Cancelar</span></a></button>

        </div>






        </div>
        @csrf
    </div>
    <!-- /.box-body -->
</div>
</form>

</form>

@section('js')

    <script>
        $(document).ready(function(){
            $("#cancelar").click(function(){

                event.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-danger',
                        cancelButton: 'btn btn-success'
                    },
                    buttonsStyling: false,
                })

                swalWithBootstrapButtons.fire({
                    title: 'Deseja cancelar a inclusão do registro?',
                    text: "Caso cancele, todas as alterações serão perdidas!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, cancelar!',
                    cancelButtonText: 'Não, continuar!',
                    reverseButtons: true
                }).then((result) => {

                    if (result.value)  {


                        window.open("/produtos","_self");

                        swalWithBootstrapButtons.fire(
                            'Cancelado',
                            'Nenhuma alteração foi feita',
                            'error'
                        )

                    } else if (
                        // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                    ) {

                    }

                })



            });

        });
    </script>
    <script>
        $(document).ready(function(){
            $("#codigobarras").select();

        });

    </script>


@stop

