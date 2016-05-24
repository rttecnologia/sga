@extends('layout.padrao')
@section('title', 'Permissão')
@section('title.descricao', 'Associar Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.permissao'))

@section('conteudo')

    <div class="panel panel-default">

        <div class="panel-heading">
            <div class="panel-title">
                <h2>Associar Funcionalidade</h2>
                <h4>{{$permissao->name}}</h4>
            </div>
        </div>

        <div class="panel-body">
            @include('layout._partials.success')
            @include('errors.error')
            @include('layout._partials.alert')

            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2">
                    <button class="btn btn-blue btn-icon btn-icon-standalone">
                        <i class="fa-plus-circle"></i>
                        <span>Adicionar Usuário</span>

                    </button>
                </div>


            </div>

        </div>

        <div class="page-header">
            <h3>Usuários Associados</h3>
            {{dump($associados)}}
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Bordered + shadow panel -->
                <div class="panel panel-default panel-border panel-shadow">
                    <!-- Add class "collapsed" to minimize the panel -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Romero Gomes da Silva</h3>

                        <div class="panel-options">
                            <a href="#" data-toggle="panel">
                                <span class="collapse-icon">–</span>
                                <span class="expand-icon">+</span>
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="http://localhost:8000/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="96">
                            </div>

                            <div class="col-sm-9">
                                <p>Matrícula: 1108842</p>
                                <p>E-mail: romero.ufrr@gmail.com</p>
                                <p>Último acesso: 23 de Maio de 2016 às 13:45:58.</p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-red btn-icon btn-icon-standalone">
                                    <i class="fa-remove"></i>
                                    <span>Remover</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Bordered + shadow panel -->
                <div class="panel panel-default panel-border panel-shadow">
                    <!-- Add class "collapsed" to minimize the panel -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Romero Gomes da Silva</h3>

                        <div class="panel-options">
                            <a href="#" data-toggle="panel">
                                <span class="collapse-icon">–</span>
                                <span class="expand-icon">+</span>
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="http://localhost:8000/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="96">
                            </div>

                            <div class="col-sm-9">
                                <p>Matrícula: 1108842</p>
                                <p>E-mail: romero.ufrr@gmail.com</p>
                                <p>Último acesso: 23 de Maio de 2016 às 13:45:58.</p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-red btn-icon btn-icon-standalone">
                                    <i class="fa-remove"></i>
                                    <span>Remover</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Bordered + shadow panel -->
                <div class="panel panel-default panel-border panel-shadow">
                    <!-- Add class "collapsed" to minimize the panel -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Romero Gomes da Silva</h3>

                        <div class="panel-options">
                            <a href="#" data-toggle="panel">
                                <span class="collapse-icon">–</span>
                                <span class="expand-icon">+</span>
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="http://localhost:8000/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="96">
                            </div>

                            <div class="col-sm-9">
                                <p>Matrícula: 1108842</p>
                                <p>E-mail: romero.ufrr@gmail.com</p>
                                <p>Último acesso: 23 de Maio de 2016 às 13:45:58.</p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-red btn-icon btn-icon-standalone">
                                    <i class="fa-remove"></i>
                                    <span>Remover</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <!-- Bordered + shadow panel -->
                <div class="panel panel-default panel-border panel-shadow">
                    <!-- Add class "collapsed" to minimize the panel -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Romero Gomes da Silva</h3>

                        <div class="panel-options">
                            <a href="#" data-toggle="panel">
                                <span class="collapse-icon">–</span>
                                <span class="expand-icon">+</span>
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="http://localhost:8000/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="96">
                            </div>

                            <div class="col-sm-9">
                                <p>Matrícula: 1108842</p>
                                <p>E-mail: romero.ufrr@gmail.com</p>
                                <p>Último acesso: 23 de Maio de 2016 às 13:45:58.</p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button class="btn btn-red btn-icon btn-icon-standalone">
                                    <i class="fa-remove"></i>
                                    <span>Remover</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


@stop


