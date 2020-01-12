<?php

namespace App\Http\Controllers;

use App\Venda;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VendasController extends Controller
{
	public function index(){

		$vendas= Venda::all();


		return view('vendas.index', compact('vendas'));


	}


	public function create(){

		$venda= new Venda();

		return view('vendas.create',compact('venda'));

	}


	public function store(){

		$data = request()->validate([
			'nome'=>'required|min:3',
			'cpf'=>'required|unique:vendas',
			'email'=>'required|email',
			'ddd1'=>'required',
			'telefone1'=>'required',

		]);

		Venda::create($data);


		return redirect('vendas')->withSuccess('Adicionado com sucesso');
	}


	public function show (Venda $venda){


		return view('vendas.show', compact('venda'));


	}

	public function edit (Venda $venda){



		return view('vendas.edit', compact('venda'));

	}

	public function update (Venda $venda){



		$data = request()->validate([
			'nome'=>'required|min:3',
			'cpf'=>'required|unique:vendas',
			'email'=>'required|email',
			'ddd1'=>'required',
			'telefone1'=>'required',

		]);

		$venda->update($data);


		return redirect('vendas/'. $venda->id);

	}

	public function destroy(Venda $venda)
	{
		$venda->delete();
		return redirect('vendas')->withSuccess('Venda removido com sucesso');;
	}

}
