@extends('layout.padrao')
@section('title', 'Permissão')
@section('title.descricao', 'Cadastrar Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.permissao'))

@section('conteudo')

<div class="panel panel-default">
			
        <div class="panel-heading">
                <div class="panel-title">
                        Nova Permissão
                </div>
        </div>

        <div class="panel-body">
            
            @include('layout._partials.success')
            @include('layout._partials.error')
            @include('layout._partials.alert')

                {!! Form::open(array('action' =>'PermissionController@store')) !!}

                        <div class="form-group">
                                {!! Form::label('name_label', 'Nome', ['class' => 'control-label']) !!}
                                {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nome da Permissão']) !!}
                        </div>
                
                        <div class="form-group">
                                {!! Form::label('slug_label', 'Slug', ['class' => 'control-label']) !!}
                                {!! Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'view.dashboard']) !!}
                        </div>
                
                        <div class="form-group">
                                {!! Form::label('description_label', 'Descrição', ['class' => 'control-label']) !!}
                                {!! Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Descrição da Permissão']) !!}
                        </div>

                        <div class="form-group">
                                {!! Form::submit('Cadastrar Permissão', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ action('PermissionController@index')}}" class="btn btn-white">Voltar </a>
                        </div>

                {!! Form::token() !!}

                {!! Form::close() !!}

        </div>

</div>

@stop


