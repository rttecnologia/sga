@extends('layout.padrao')
@section('title', 'Perfil')
@section('title.descricao', 'Associar Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.perfil'))

@section('conteudo')
    @include('flash::message')
    @include('layout._partials.modal.delete')

    <div class="panel panel-default">

        <div class="panel-heading">
            <div class="panel-title">
                <h2>Permissões Associadas</h2>
                <h4>{{$objeto->name}}</h4>
            </div>
        </div>

        <div class="panel-body">

            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12 text-right">
                    <a href="javascript: void(0);"
                       onclick="jQuery('#modal-addpermissao-perfil').modal('show', {backdrop: 'fade'});">
                        <button class="btn btn-blue btn-icon btn-icon-standalone">
                            <i class="fa-plus-circle"></i>
                            <span>Adicionar Permissão</span>
                        </button>
                    </a>

                    <a href="{{ action('RoleController@index')}}">
                        <button class="btn btn-white btn-icon btn-icon-standalone">
                            <i class="fa-reply"></i>
                            <span>Voltar</span>
                        </button>
                    </a>
                </div>
            </div>

            @if(count($data) > 0)

                <div class="gallery-env">
                    <div class="album-images row">
                        @foreach ($data as $d)
                            <!-- Album Image -->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="album-image">
                                    <a class="name" href="#">
                                        <span>{{$d->name}}</span>
                                        <em>{{$d->description}}</em>
                                    </a>

                                    <div class="image-checkbox">
                                        <a href="#" data-href="{{ action('RoleController@deletePermissionRole', array('id_permissao'=>$d->id, 'id_perfil'=>$objeto->id)) }}"
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
                        {!! $data->render() !!}
                    </div>
                </div>

            @else
                <div class="well well-sm" style="margin-top: 15px;">
                    Nenhuma permissão associada a este perfil.
                </div>
            @endif

        </div>

    </div>

    @include('layout._partials.sistema.buscaPermissao')

@stop