<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Pedido;
use App\Models\Pedido_Item;
use App\Models\User;
use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Foreach_;

class ApiPedidosController extends Controller
{
    public function add(Request $request){

        $carrinho = Carrinho::where('user_id', '=',Auth()->user()->id)->get();
        $endereco = Endereco::where('user_id','=',Auth()->user()->id)->value('id');


        $pedido=Pedido::create([
            'user_id' => Auth()->user()->id,
            'endereco_id' => $endereco,
            'status' => 'Pedido realizado'
        ]);


        foreach($carrinho as $item){

            Pedido_Item::create([
                'pedido_id'=> $pedido->id,
                'produto_id'=> $item->produto_id,
                'quantidade'=> $item->quantidade,
                'preco'=> $item->produto()->preco

            ]);

            $item->delete();

            
        }
        return response()->json(['Pedido' =>  'REALIZADO']);
    }
}
