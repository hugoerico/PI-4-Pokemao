<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index() {
        return view('categoria.index')->with('categorias',Categoria::all());
    } 
 
    public function create() {
     return view('categoria.create');
 } 
 
 public function store(Request $request ) {
     Categoria::create($request->all());
     session()->flash('sucesso','Nova Categoria cadastrada com sucesso');
     return redirect(route('categoria.index'));
 } 
 
 public function edit(Categoria $categoria) {
     return view('categoria.edit')->with('categoria',$categoria);
 } 
 
 public function update(Request $request, Categoria $categoria) {
     $categoria->update($request->all());
     session()->flash('sucesso','Categoria alterado com sucesso');
     return redirect(route('categoria.index'));
 } 
 
 public function destroy(Categoria $categoria) {

    if($categoria->produtos()->count()>0){
        session()->flash('sucesso','Você não pode deletar uma categoria que tenha produto');
     return redirect(route('categoria.index'));
    }
     $categoria->delete();
     session()->flash('sucesso','Categoria apagada com sucesso');
     return redirect(route('categoria.index'));
 
 } 
}
