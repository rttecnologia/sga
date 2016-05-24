<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DCN\RBAC\Models\Permission;
use Flash;
use DB;
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

        $permission = Permission::findOrFail($id);
        $associados = DB::table('permission_user')->where('permission_id', $id)->get();

        return view('sistema.permissao.assign', ['permissao' => $permission, 'associados' => $associados]);
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
