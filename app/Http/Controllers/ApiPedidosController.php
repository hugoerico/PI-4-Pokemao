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

        $carrinho = Carrinho::where('user_id', '=',4)->get();
        $endereco = Endereco::where('user_id','=',4)->value('id');


        $pedido=Pedido::create([
            'user_id' => 4,
            'endereco_id' => $endereco,
            'status' => 'Pedido realizado'
        ]);
       


        foreach($carrinho as $item){

            $produto = Produto::where('id', $item->produto_id,)->first();

            Pedido_Item::create([
                
                'pedido_id'=> $pedido->id,
                'produto_id'=> $item->produto_id,
                'quantidade'=> $item->quantidade,
                'nome'=> $produto->nome,
                'imagem'=> $produto->imagem,
                'descricao'=> $produto->descricao,
                'preco'=> $item->produto()->preco

            ]);

            $item->delete();

            
        }
        return response()->json(['Pedido' =>  'REALIZADO']);
    }

    public function pedidos(){

        return view('pedido.pedidos')->with(['pedidos'=>Pedido::all(), 'nomes'=>User::all()]);
    
    }

    public function editarStatus($id){
         
        $id = Pedido::where('id', $id)->value('id');
        $user_id = Pedido::where('id', $id)->value('user_id');
        $endereco_id = Pedido::where('id', $id)->value('endereco_id');
        $status = Pedido::where('id', $id)->value('status');
        $tudo = [$id,$user_id,$endereco_id,$status];
        return view('pedido.editarStatus')->with('tudo',$tudo);
    
    }

    public function updaterStatus(Request $request,$id){


        Pedido::where('id',$id)->update(['status'=>$request->status]);
        session()->flash('sucesso', 'Status alterado');
        return redirect(route('usuario.usuarios'));
    
    }

    public function item(){


        return view('pedido.item')->with(['itens'=>Pedido_Item::All(),'produtos'=>Produto::All()]);
    
    }
    public function show(){

        
        return response()->json(Pedido::where('user_id', 4)->get());
        
    
    }

    public function showProdutos($id){ 

        return response()->json(Pedido_Item::where('pedido_id', $id)->get());
    }

    
}
