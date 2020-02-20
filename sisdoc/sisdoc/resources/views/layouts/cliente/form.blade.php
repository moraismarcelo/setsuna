
@yield('form')


<a href="/clientes/">Voltar</a>


        <div class="form-group row">


            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-5">
                <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" autocomplete="off" value="{{old('nome',$cliente->nome)}}">

                @error('nome')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">CPF</label>
            <div class="col-sm-5">
                <input type="text" maxlength="11" name="cpf" class="form-control" id="inputPassword3" placeholder="CPF" autocomplete="off" value="{{old('cpf',$cliente->cpf)}}">
                @error('cpf')

                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>


        @csrf



@stop
