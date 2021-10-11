<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Carrinho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function add(Produto $produto){

        $item = Carrinho::where([['produto_id','=',$produto->id],['user_id','=',Auth()->user()->id]])->first();


        if ($item){
           $item->update([
            'quantidade'=>$item->quantidade +1
        ]);
    }else{

    

        Carrinho::create([
            'user_id' => Auth()->user()->id,
            'produto_id' => $produto->id,
            'quantidade' =>1
        ]);
    }


    }

    public function remove(Produto $produto){

        $item = Carrinho::where([['produto_id','=',$produto->id],['user_id','=',Auth()->user()->id]])->first();


        if ($item->quantidade > 1){
           $item->update([
            'quantidade'=>$item->quantidade - 1
        ]);
        
    }else{$item->delete();

    }

        


    }

    public function show(){
       $carrinho = Carrinho::where(['user_id','=',Auth()->user()->id])->get();

       return view('carrinho.show')->with('carrinho', $carrinho);
    }
}
