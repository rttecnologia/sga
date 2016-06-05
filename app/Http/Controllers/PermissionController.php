<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DCN\RBAC\Models\Permission;
use Flash;
//use Symfony\Component\HttpFoundation\Response;
//use Illuminate\Support\Facades\Input;
//use Illuminate\Pagination\LengthAwarePaginator;
//use Illuminate\Support\Collection;
use DB;
use App\User;
use Validator;

class PermissionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $permission = Permission::all();
        return view('sistema.permissao.index', ['permissao' => $permission]);
    }

    public function assign(Request $request, $id) {

        $permissao = Permission::findOrFail($id);
        $usuarios = User::paginate(6);

        $count = count($usuarios);

        for ($i = 0; $i < $count; $i++) {

            if(!$usuarios[$i]->can($permissao->id)){
                unset($usuarios[$i]);
            }
        }

        //$associados = DB::table('permission_user')->where('permission_id', $id)->get();

        return view('sistema.permissao.assign', compact('permissao','usuarios'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('sistema.permissao.create');
    }

    public function store(Request $request) {
        $input = $request->all();

        $validator = $this->validator($request, $input);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        Permission::create($input);

        Flash::success('Permissão criada com sucesso!');
        return redirect('sistema/permissao');

    }

    public function assignStore(Request $request) {
        $input = $request->all();

        $validator = $this->validator($request, $input);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        //implementar a função

        Flash::success('Permissão associada com sucesso!');
        return redirect('sistema/permissao');

    }

    public function addPermissionUser(Request $request){
        $input = $request->all();

        $permissao = $input['id_permissao'];

        $usuarios = $input['user'];

        foreach ($usuarios as $u) {
            $user = User::find($u);
            $user->attachPermission($permissao);
        }

        Flash::success('Usuário(s) adicionado(s) com sucesso!');
        return redirect('sistema/permissao/assign/'.$permissao);
        //return response()->json($input);
    }

    public function deletePermissionUser(Request $request){
        $input = $request->all();

        $id_usuario = $input['id_usuario'];
        $id_permissao = $input['id_permissao'];

        $user = User::find($id_usuario);
        $user->detachPermission($id_permissao);

        Flash::success('Usuário excluido com sucesso!');
        return redirect('sistema/permissao/assign/'.$id_permissao);
    }

    public function edit($id) {
        $permission = Permission::findOrFail($id);

        return view('sistema.permissao.edit', ['permissao' => $permission]);
    }

    public function update(Request $request, $id) {
        $input = $request->all();
        $validator = $this->validator($request, $input);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $permission = Permission::findOrFail($id);


        $permission->fill($input)->save();
        Flash::success('Permissão atualizada com sucesso!');
        return redirect('sistema/permissao');
    }

    public function delete($id) {

        $permission = Permission::findOrFail($id);
        $permission->delete();
        Flash::success('Permissão excluída com sucesso!');
        return redirect('sistema/permissao');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request, array $data) {
        if ($request->isMethod('patch')) {
            $slug_rule = 'required|max:255|unique:permissions' . $request->get('id');
        }  else  {
            $slug_rule = 'required|max:255|unique:permissions';
        }

        return Validator::make($data, [
            'name' => 'required|max:255',
            'slug' => $slug_rule,
            'description' => 'required|min:6',
        ]);
    }


}
