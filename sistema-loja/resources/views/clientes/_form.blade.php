<style type="text/css">
    .input-group-addon { width: 100px; }
    .input-group { width: 100%; }
</style>

<br>


<div class="box-body">

        <div class="input-group">
        <span class="input-group-addon text-bold">Nome</span>
        <input class="form-control input-sm" aria-describedby="basic-addon1  onkeyup=" this.value = this.value.toUpperCase();" name="nome" type="text" id="nome" value="{{ old('nome') ?? $cliente->nome }}">
        </div>
        <div><span style="color:red"> {{ $errors->first('nome') }}</span></div>

        <br>

        <div class="input-group">
        <span class="input-group-addon text-bold">CPF</span>
        <input class="form-control input-sm" maxlength="14" aria-describedby="basic-addon1 onkeyup=" this.value = this.value.toUpperCase();" name="cpf" type="text" id="cpf" placeholder="XXX.XXX.XXX-XX" value="{{old('cpf',$cliente->cpf)}}">
        </div>
        <div><span style="color: red">{{ $errors->first('cpf') }}</span></div>
        <br>

        <div class="input-group">
            <span class="input-group-addon text-bold">E-mail</span>
            <input class="form-control input-sm" onkeyup="this.value = this.value.toUpperCase();" name="email" type="email" id="email" value="{{ old('email') ?? $cliente->email }}">
        </div>
        <div><span style="color: red">{{ $errors->first('email') }}</span></div>
        <br>

        <div class="input-group">
            <span class="input-group-addon text-bold">DDD 1</span>
            <input maxlength="2" class="form-control input-sm" name="ddd1" type="text" id="ddd1" value="{{ old('ddd1',$cliente->ddd1) }}">
        </div>
        <div><span style="color: red"> {{ $errors->first('ddd1') }}</span></div>
        <br>
        <div class="input-group">
            <span class="input-group-addon text-bold">Telefone 1</span>
        <input placeholder="XXXXX-XXXX" maxlength="9" class="form-control input-sm" name="telefone1" type="text" id="telefone1" value="{{ old('telefone1',$cliente->telefone1)}}">
        </div>
            <div><span style="color: red">{{ $errors->first('telefone1') }}</span></div>
    @csrf






    </div>
    <!-- /.box-body -->



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


                        window.open("/clientes","_self");

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

            $("#nome").select();

                 });

    </script>

@stop