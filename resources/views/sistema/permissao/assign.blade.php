@extends('layout.padrao')
@section('title', 'Permissão')
@section('title.descricao', 'Associar Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.permissao'))

@section('conteudo')
    @include('layout._partials.modal.permissao')
    @include('layout._partials.modal.delete')
    @include('flash::message')

    <div class="panel panel-default">

        <div class="panel-heading">
            <div class="panel-title">
                <h2>Associar Funcionalidade</h2>
                <h4>{{$permissao->name}}</h4>
            </div>
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-md-2">
                    <a href="javascript: void(0);"
                       onclick="jQuery('#add-permissao').modal('show', {backdrop: 'fade'});">
                        <button class="btn btn-blue btn-icon btn-icon-standalone">
                            <i class="fa-plus-circle"></i>
                            <span>Adicionar Usuário</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="page-header">
            <h3>Usuários Associados</h3>
        </div>

        <?php $cont = 1; ?>

        @foreach ($usuarios as $user)

            @if($cont == 1)
            <div class="row">
            @endif

            <div class="col-sm-6">
                <!-- Bordered + shadow panel -->
                <div class="panel panel-default panel-border panel-shadow">
                    <!-- Add class "collapsed" to minimize the panel -->
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$user->name}}</h3>

                        <div class="panel-options">
                            <a href="#" data-toggle="panel">
                                <span class="collapse-icon">–</span>
                                <span class="expand-icon">+</span>
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="http://localhost:8000/assets/images/user-4.png"
                                     class="img-circle img-responsive">
                            </div>

                            <div class="col-sm-8">
                                <p class="no-margin"><b>Matrícula:</b> ???? </p>
                                <p class="no-margin"><b>E-mail:</b> {{$user->email}}</p>
                                <p style="margin: 0 0 10px 0;"><b>Último acesso:</b> ???? </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <a href="#"
                                   data-href="{{ action('PermissionController@deletePermissionUser', array('id_usuario'=>$user->id, 'id_permissao'=>$permissao->id)) }}"
                                   data-toggle="modal" data-target="#confirm-delete">
                                    <button class="btn btn-red btn-icon btn-icon-standalone btn-sm">
                                        <i class="fa-remove"></i>
                                        <span>Remover</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @if($cont == 2)

            </div>
            <?php $cont = 1; ?>

            @else

            <?php $cont++; ?>

            @endif
        @endforeach





        {{--@while(true)--}}

        {{--@if($i%3 == 0)--}}

        {{--@endif--}}
        {{--{{$i++}}--}}
        {{--@endwhile--}}




        {{--@foreach ($usuarios as $user)--}}

        {{--<div class="row">--}}

        {{--<div class="col-sm-6">--}}
        {{--<!-- Bordered + shadow panel -->--}}
        {{--<div class="panel panel-default panel-border panel-shadow">--}}
        {{--<!-- Add class "collapsed" to minimize the panel -->--}}
        {{--<div class="panel-heading">--}}
        {{--<h3 class="panel-title">{{$user->name}}</h3>--}}

        {{--<div class="panel-options">--}}
        {{--<a href="#" data-toggle="panel">--}}
        {{--<span class="collapse-icon">–</span>--}}
        {{--<span class="expand-icon">+</span>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="panel-body">--}}
        {{--<div class="row">--}}
        {{--<div class="col-sm-4">--}}
        {{--<img src="http://localhost:8000/assets/images/user-4.png"--}}
        {{--class="img-circle img-responsive">--}}
        {{--</div>--}}

        {{--<div class="col-sm-8">--}}
        {{--<p class="no-margin"><b>Matrícula:</b> ???? </p>--}}
        {{--<p class="no-margin"><b>E-mail:</b> {{$user->email}}</p>--}}
        {{--<p style="margin: 0 0 10px 0;"><b>Último acesso:</b> ???? </p>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<div class="row">--}}
        {{--<div class="col-sm-12 text-right">--}}
        {{--<a href="#" data-href="{{ action('PermissionController@deletePermissionUser', array('id_usuario'=>$user->id, 'id_permissao'=>$permissao->id)) }}" data-toggle="modal" data-target="#confirm-delete">--}}
        {{--<button class="btn btn-red btn-icon btn-icon-standalone btn-sm">--}}
        {{--<i class="fa-remove"></i>--}}
        {{--<span>Remover</span>--}}
        {{--</button>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}

        {{--@endforeach--}}

        <div class="row">
            <div class="col-sm-12 text-center">
                {!! $usuarios->render() !!}
            </div>
        </div>

    </div>

    @include('layout._partials.sistema.buscaUsuario')

@stop