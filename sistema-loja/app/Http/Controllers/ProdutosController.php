<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos =Produto::all();


	    return view ('produtos.index', compact('produtos'));


    }

	public function create(){

		$produto = new Produto();
		return view('produtos.create',compact('produto'));

	}
	public function store(Request $request){

		$data = request()->validate([
			'codigobarras'=>'|required|string|max:50',
			'nome'=>'required|min:3',
			'descricao'=>'sometimes|required|',
			'marca'=>'required',
			'modelo'=>'required',
			'quantidade'=>'required|numeric',
			'valorCusto'=>'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
			'valorVenda'=>'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
		]);

		switch ($request->input('action')){

		case 'save':

			Produto::create($data);
			return redirect('produtos')->withSuccess('Produto adicionado com sucesso');

		break;

		case 'saveandcontinue':

			Produto::create($data);
			return redirect('/produtos/create')->withSuccess('Produto adicionado com sucesso');

		break;
		}

	}

	public function show(Produto $produto)
	{
		return view('produtos.show',compact('produto'));
	}

	public function edit (Produto $produto)
	{
		return view('produtos.edit', compact('produto'));
	}
	public function update (Request $request){

		$data = request()->validate([
			'codigobarras'=>'|required|string|max:50',
			'nome'=>'required|string|min:3',
			'descricao'=>'sometimes|string|required|',
			'marca'=>'required|string|',
			'modelo'=>'required|string|',
			'quantidade'=>'required|numeric',
			'valorCusto'=>'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
			'valorVenda'=>'required|numeric|regex:/^\d+(\.\d{1,2})?$/',

		]);

		switch ($request->input('action')){

			case 'save':

				$produto->update($data);
				return redirect('produtos')->withSuccess('Produto atualizado com sucesso');

				break;

			case 'saveandcontinue':

				$produto->update($data);
				return redirect('/produtos/create')->withSuccess('Produto atualizado com sucesso');

				break;
		}




		return redirect('produtos/'. $produto->id);

	}

	public function destroy(Produto $produto)
	{
		$produto->delete();
		return redirect('/produtos')->withSuccess('Produto removido com sucesso');
	}
}
