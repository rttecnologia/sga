<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
//Route::get('/', function () {
//  return view('dashboard');
//});









/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */


Route::group(['middleware' => 'web'], function () {
    Route::Auth();
    Route::get('/', 'HomeController@index');    
    Route::get('/dashboard', 'HomeController@dashboard');

    Route::resource('secretaria/academico', 'AcademicoController@index');

    Route::resource('sistema/bairro', 'BairroController');
    
    //Rotas para o gerenciamento de perfil (Role)
    Route::get('sistema/perfil', 'RoleController@index');
    Route::post('sistema/perfil/store', 'RoleController@store');
    Route::get('sistema/perfil/delete/{id}', 'RoleController@delete');
    Route::get('sistema/perfil/edit/{id}', 'RoleController@edit');
    Route::patch('sistema/perfil/update/{id}', 'RoleController@update');
    Route::get('sistema/perfil/assignUser/{id}', 'RoleController@assignUser');
    Route::get('sistema/perfil/assignPermission/{id}', 'RoleController@assignPermission');
    Route::get('sistema/perfil/adduser', 'RoleController@addRoleUser');
    Route::get('sistema/perfil/addpermission', 'RoleController@addPermissionRole');
    Route::get('sistema/perfil/removepermission', 'RoleController@deletePermissionRole');
    Route::get('sistema/perfil/removeuser', 'RoleController@deleteRoleUser');

    // Rotas para o gerenciamento de Usuarios (Users)
    Route::get('sistema/usuario', 'UsuarioController@index');
    Route::get('sistema/usuario/create', 'UsuarioController@create');
    Route::post('sistema/usuario/store', 'UsuarioController@store');
    Route::get('sistema/usuario/edit/{id}', 'UsuarioController@edit');
    Route::get('sistema/usuario/delete/{id}', 'UsuarioController@delete');
    Route::get('sistema/usuario/show/{id}', 'UsuarioController@show');
    Route::patch('sistema/usuario/update/{id}', 'UsuarioController@update');
    Route::get('sistema/usuario/buscaUsuario', 'UsuarioController@buscaUsuario'); // Rota para buscar usuário

    //Rotas para o gerenciamento de permissao (Permission)
    Route::get('sistema/permissao', 'PermissionController@index');
    Route::get('sistema/permissao/assign/{id}', 'PermissionController@assign');
    Route::post('sistema/permissao/assignStore', 'PermissionController@assignStore');
    Route::get('sistema/permissao/create', 'PermissionController@create');
    Route::post('sistema/permissao/store', 'PermissionController@store');
    Route::get('sistema/permissao/delete/{id}', 'PermissionController@delete');
    Route::get('sistema/permissao/edit/{id}', 'PermissionController@edit');
    Route::patch('sistema/permissao/update/{id}', 'PermissionController@update');
    Route::get('sistema/permissao/adduser', 'PermissionController@addPermissionUser');
    Route::get('sistema/permissao/removeuser', 'PermissionController@deletePermissionUser');
    Route::get('sistema/permissao/buscaPermissao', 'PermissionController@buscaPermissao'); // Rota para buscar usuário


    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    // Rotas para solicitar trocar de senha...
    Route::get('password/email', 'PasswordController@getEmail');
    Route::post('password/email', 'PasswordController@postEmail');

// Rotas para trocar a senha...
    Route::get('password/reset/{token}', 'PasswordController@getReset');
    Route::post('password/reset', 'PasswordController@postReset');
});



