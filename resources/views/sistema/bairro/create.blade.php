@extends('layout.padrao')
@section('title', 'Bairro')
@section('title.descricao', 'Cadastrar Bairro')
@section('breadcrumbs', Breadcrumbs::render('sistema.bairro'))

@section('conteudo')

<div class="panel panel-default">
			
        <div class="panel-heading">
                <div class="panel-title">
                        Novo Perfil
                </div>
        </div>

        <div class="panel-body">
            
            @include('layout._partials.success')
            @include('errors.error')
            @include('layout._partials.alert')

                {!! Form::open(array('action' =>'RoleController@store')) !!}

                        <div class="form-group">
                                <!-- Campo Nome -->
                                {!! Form::label('name_label', 'Nome', ['class' => 'control-label']) !!}
                                {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nome do Perfil']) !!}
                        </div>
                
                        <div class="form-group">
                                <!-- Campo email -->
                                {!! Form::label('slug_label', 'Slug', ['class' => 'control-label']) !!}
                                {!! Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'Ex.: professor']) !!}
                        </div>
                
                        <div class="form-group">
                                <!-- Campo email -->
                                {!! Form::label('description_label', 'Descrição', ['class' => 'control-label']) !!}
                                {!! Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Descrição do Perfil']) !!}
                        </div>
                

                        <div class="form-group">
                                {!! Form::submit('Cadastrar Perfil', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ action('RoleController@index')}}" class="btn btn-white">Voltar </a>
                        </div>

                {!! Form::token() !!}

                {!! Form::close() !!}

        </div>

</div>
@stop


