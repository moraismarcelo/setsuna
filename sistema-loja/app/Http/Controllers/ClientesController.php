<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;
use LaravelLegends\PtBrValidator\ValidatorProvider;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ClientesController extends Controller
{

	public function index(){

		$clientes= Cliente::all();

		return view('clientes.index', compact('clientes'));

	}


	public function create(){

		$cliente = new Cliente();

		return view('clientes.create',compact('cliente'));

	}

	public function store(Request $request){


		$data = request()->validate([
			'nome'=>'required|min:3|max:50',
			'cpf'=>'required|digits:11|cpf|unique:clientes',
			'email'=>'required|email',
			'ddd1'=>'required|digits:2|numeric',
			'telefone1'=>'required|min:8|max:9  ',

		]);


		switch ($request->input('action')){

			case 'save':

				Cliente::create($data);
				return redirect('clientes')->withSuccess('Cliente adicionado com sucesso');

			break;

			case 'saveandcontinue';

				Cliente::create($data);
				return redirect('/clientes/create')->withSuccess('Cliente adicionado com sucesso');
			break;
		}

	}


	public function show (Cliente $cliente){

		return view('clientes.show', compact('cliente'));

	}

	public function edit (Cliente $cliente){

		return view('clientes.edit', compact('cliente'));

	}

	public function update (Cliente $cliente){

		$data = request()->validate([
			'nome'=>'required|min:3|max:50',
			'email'=>'required|email',
			'ddd1'=>'required|digits:2|numeric',
			'telefone1'=>'required|min:8|max:9',

		]);



		$cliente->update($data);

		return redirect('clientes/'. $cliente->id)->withSuccess('Cliente atualizado com sucesso');

	}

	public function destroy(Cliente $cliente)
	{
		$cliente->delete();

		return redirect('clientes')->withSuccess('Cliente removido com sucesso');
	}


}