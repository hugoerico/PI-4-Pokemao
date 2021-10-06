<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class UsuarioController extends Controller
{

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            
        ]);
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' =>  'Credenciais invalidas']);
        }
        
        
        return response()->json($user);
    }

    function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:8'
        ]);
        $request['password']=Hash::make($request['password']);

        $user = User::create($request->all());
        return response()->json($user);
    }

    public function usuarios( ){
        return view('usuario.usuarios')->with([ 'usuarios'=>User::all()]);
    }
    
    public function editar( $id){
    
        $id = User::where('id', $id)->value('id');
        $name = User::where('id', $id)->value('name');
        $email = User::where('id', $id)->value('email');
        $isadmin = User::where('id', $id)->value('IsAdmin');
        $tudo = [$id,$name,$email,$isadmin];
        return view('usuario.editar')->with('tudo',$tudo);
        
    }
    public function updater(Request $request, $id) {
    
        User::where('id',$id)->update(['IsAdmin'=>$request->isadmin]);
        session()->flash('sucesso', 'Usuario alterado para Administrador');
        return redirect(route('usuario.usuarios'));
        
    } 
    
}
 