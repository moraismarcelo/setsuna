<?php

namespace App\Http\Controllers;

use App\Atendimento;
use Illuminate\Http\Request;

class AtendimentosController extends Controller
{
	public function index()
	{
		$atendimentos =Atendimento::all();
		return view ('atendimentos.index', compact('atendimentos'));



	}

	public function create(){

		$atendimento = new Atendimento();
		return view('atendimentos.create',compact('atendimento'));

	}
	public function store(){

		$data = request()->validate([
			'nome'=>'required|min:3',
			'descricao'=>'sometimes|required|',
			'marca'=>'required',
			'modelo'=>'required',
			'quantidade'=>'required|numeric',
			'valorCusto'=>'required|numeric',
			'valorVenda'=>'required|numeric',
		]);

		Atendimento::create($data);

		return redirect('atendimentos');
	}

	public function show(Atendimento $atendimento)
	{
		return view('atendimentos.show',compact('atendimento'));
	}

	public function edit (Atendimento $atendimento)
	{
		return view('atendimentos.edit', compact('atendimento'));
	}
	public function update (Atendimento $atendimento){

		$data = request()->validate([

			'nome'=>'required|min:3',
			'descricao'=>'sometimes|required|',
			'marca'=>'required',
			'modelo'=>'required',
			'quantidade'=>'required|numeric',
			'valorCusto'=>'required|numeric',
			'valorVenda'=>'required|numeric',

		]);

		$atendimento->update($data);


		return redirect('atendimentos/'. $atendimento->id);

	}

	public function destroy(Atendimento $atendimento)
	{
		$atendimento->delete();
		return redirect('/atendimentos');
	}
}
