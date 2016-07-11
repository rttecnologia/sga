@extends('layout.padrao')
@section('title', 'Permissão')
@section('title.descricao', 'Associar Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.permissao'))

@section('conteudo')
    @include('flash::message')
    @include('layout._partials.modal.delete')

    <div class="panel panel-default">

        <div class="panel-heading">
            <div class="panel-title">
                <h2>Usuários Associados</h2>
                <h4>{{$permissao->name}}</h4>
            </div>
        </div>

        <div class="panel-body">

            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12 text-right">
                    <a href="javascript: void(0);"
                       onclick="jQuery('#modal-adduser-permission').modal('show', {backdrop: 'fade'});">
                        <button class="btn btn-blue btn-icon btn-icon-standalone">
                            <i class="fa-plus-circle"></i>
                            <span>Adicionar Usuário</span>
                        </button>
                    </a>

                    <a href="{{ action('PermissionController@index')}}">
                        <button class="btn btn-white btn-icon btn-icon-standalone">
                            <i class="fa-reply"></i>
                            <span>Voltar</span>
                        </button>
                    </a>
                </div>
            </div>

            @if(count($usuarios) > 0)

                <div class="gallery-env">
                    <div class="album-images row">
                        @foreach ($usuarios as $user)
                            <!-- Album Image -->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="album-image">
                                    <a class="thumb" href="#">
                                        <img class="img-responsive img-circle" src="{{ asset('assets/images/user-4.png')}}">
                                    </a>

                                    <a class="name" href="#">
                                        <span>{{$user->name}}</span>
                                        <em>{{$user->email}}</em>
                                    </a>

                                    <div class="image-checkbox">
                                        <a href="#" data-href="{{ action('PermissionController@deletePermissionUser', array('id_usuario'=>$user->id, 'id_permissao'=>$permissao->id)) }}"
                                           data-toggle="modal" data-target="#confirm-delete">
                                            <i class="fa-remove"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-center">
                        {!! $usuarios->render() !!}
                    </div>
                </div>

            @else
                <div class="well well-sm" style="margin-top: 15px;">
                    Nenhum usuário associado a esta permissão.
                </div>
            @endif

        </div>

    </div>

    @include('layout._partials.sistema.buscaUsuario')

@stop