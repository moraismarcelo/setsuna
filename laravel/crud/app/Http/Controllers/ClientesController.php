<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ClientesController extends Controller
{
    public function list()
    {
        $clientes = Cliente::all();

        return view('clientes.clientes', ['clientes' => $clientes]);
    }
}
