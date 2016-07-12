<?php

namespace App\Http\Controllers;

use DCN\RBAC\Models\Permission;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use DCN\RBAC\Models\Role;
use DB;
use Validator;
use Flash;
use App\User;


class RoleController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $roles = Role::all();
        return view('sistema.perfil.index', ['perfis' => $roles] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->ajax()) {
            $input = $request->all();

            $validator = $this->validator($request, $input);

            if ($validator->fails()) {
                $this->throwValidationException(
                    $request, $validator
                );
            }

            $role = Role::create($input);

            Flash::success('Perfil adicionado com sucesso!');
            return $request->json($role);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if ($request->ajax()) {
            $role = Role::findOrFail($id);
            return $role;
        }

    }

    public function assignUser($id)
    {

        $objeto = Role::findOrFail($id);

        $data = DB::table('users')
            ->whereIn('id', function ($query) use ($id) {
                $query->select(DB::raw('user_id'))
                    ->from('role_user')
                    ->whereRaw('role_user.user_id = users.id AND role_user.role_id = '.$id);
            })
            ->paginate(8);

        return view('sistema.perfil.assignUser', compact('objeto', 'data'));

    }

    public function assignPermission($id)
    {

        $objeto = Role::findOrFail($id);

        $data = DB::table('permissions')
            ->whereIn('id', function ($query) use ($id) {
                $query->select(DB::raw('permission_id'))
                    ->from('permission_role')
                    ->whereRaw('permission_role.permission_id = permissions.id AND permission_role.role_id = '.$id);
            })
            ->paginate(8);

        return view('sistema.perfil.assignPermission', compact('data', 'objeto'));

    }

    public function addRoleUser(Request $request)
    {
        $usuarios = $request->input('user');

        foreach ($usuarios as $u) {
            $user = User::find($u);
            $user->attachRole($request->input('id_perfil'));
        }

        Flash::success('Usuário(s) adicionado(s) com sucesso!');
        return redirect('sistema/perfil/assignUser/' . $request->input('id_perfil'));

    }

    public function deleteRoleUser(Request $request)
    {
        $user = User::find($request->input('id_usuario'));
        $user->detachRole($request->input('id_perfil'));

        Flash::success('Usuário excluido com sucesso!');
        return redirect('sistema/perfil/assignUser/' . $request->input('id_perfil'));
    }

    public function addPermissionRole(Request $request)
    {
        $permissoes = $request->input('permissions');

        $role = Role::find($request->input('id_perfil'));

        foreach ($permissoes as $p) {
            $permission = Permission::find($p);
            $role->attachPermission($permission);
        }

        Flash::success('Permissões adicionadas com sucesso!');
        return redirect('sistema/perfil/assignPermission/' . $role->id);

    }

    public function deletePermissionRole(Request $request)
    {
        $role = Role::find($request->input('id_perfil'));
        $permission = Permission::find($request->input('id_permissao'));

        $role->detachPermission($permission);

        Flash::success('Permissão excluída com sucesso!');
        return redirect('sistema/perfil/assignPermission/' . $role->id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        if ($request->ajax()) {

            $perfil = Role::findOrFail($id);

            $validator = $this->validator($request, $perfil->toArray());

            if ($validator->fails()) {
                $this->throwValidationException(
                    $request, $validator
                );
            }

            $perfil->fill($request->all())->save();

            Flash::success('Perfil atualizado com sucesso!');
            return $request->json($perfil);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        //
        $role = Role::findOrFail($id);
        $role->delete();
        Flash::success('Perfil excluido com sucesso!');
        return redirect('sistema/perfil');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request, array $data) {
        if ($request->isMethod('patch')) {
            $slug_rule = 'required|max:255|unique:roles,slug,' . $request->get('id');
        }  else  {
            $slug_rule = 'required|max:255|unique:roles';
        }

        return Validator::make($data, [
            'name' => 'required|max:255',
            'slug' => $slug_rule,
            'description' => 'required|min:6',
        ]);
    }

}
