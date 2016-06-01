<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\User;
use Validator;
use Flash;
use DB;

class UsuarioController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        //$usuarios = Usuario::all();
        $usuarios = User::all();
        return view('sistema.usuario.index', ['usuarios' => $usuarios]);
    }

    public function create() {
        return view('sistema.usuario.create');
    }

    public function store() {

        $input = Input::all();

        $validator = Validator::make($input, Usuario::rules(), Usuario::message());

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        Usuario::create($input);

        return redirect()->back()->with('flash_message', 'Usuário criado com suscesso!');
    }

    public function show($id) {
        $usuario = User::find($id);
        return view('sistema.usuario.show', ['usuario' => $usuario]);
    }

//    public function edit($id) {
//        $usuario = User::findOrFail($id);
//        return view('sistema.usuario.edit', ['usuario' => $usuario]);
//    }

    public function edit(Usuario $usuario, Request $request) {
        if($request->ajax()){
            
        }else{
            $usuarios = Auth::user()->usuarios()->orderby('id')->get();
            
        }
    }
    
    public function update($id) {
        $usuario = Usuario::findOrFail($id);

        $input = Input::all();

        $validator = Validator::make($input, Usuario::rules(), Usuario::message());

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        $usuario->fill($input)->save();

        return redirect()->back()->with('flash_message', 'Usuário atualizado com suscesso!');
    }

    public function delete($id) {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        //return redirect('sistema/usuario')->with('flash_message', 'Usuário deletado com suscesso!');
        Flash::success('Usuário excluido com sucesso!');
        return redirect('sistema/usuario');
    }

    public function buscaUsuario(){
        $term = Input::get('term');

        $results = array();

        $queries = DB::table('users')
            ->where('name', 'LIKE', '%'.$term.'%')
            ->orWhere('email', 'LIKE', '%'.$term.'%')
            ->take(5)->get();

        foreach ($queries as $query)
        {
            $results[] = [ 'id' => $query->id, 'value' => $query->name.' ('.$query->email.')'];
        }
        return response()->json($results);

    }
    
}
