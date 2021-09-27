<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ApiProdutosController extends Controller
{
    public function index()
    {
        return response()->json(Produto::all());
    }

    
    public function show(Produto $produto,$id)
    {
        //return response()->json($produto);

      $search = $id; 
      return response()->json(Produto::where('id',$search )->get());
    }


    public function search($nome)
    {
      $search = $nome; 
      return response()->json(Produto::where('nome', 'LIKE', '%'.$search.'%')->get());
    }
}
