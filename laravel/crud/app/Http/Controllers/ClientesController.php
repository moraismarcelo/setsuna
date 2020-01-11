<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function list()
    {
        $clientes = [

          "Marcelo",
          "Sendy",
          "Sophia"
        ];

        return view('clientes.clientes', ['clientes' => $clientes]);  
    }
}
