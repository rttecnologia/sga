@extends('layout.padrao')
@section('title', 'Perfil')

@section('title.descricao', 'Editar Perfil')
@section('breadcrumbs', Breadcrumbs::render('sistema.perfil'))

@section('conteudo')
    @include('flash::message')

    @include('layout._partials.success')
    @include('layout._partials.modal')


<div class="container">
    <h1>Editar Perfil</h1>

    {!! Form::model($perfil, ['method' => 'PATCH', 'action' => ['RoleController@update', $perfil->id]]) !!}


    <div class="form-group">
        <!-- Campo Nome -->
        {!! Form::label('name_label', 'Nome', ['class' => 'control-label']) !!}
        {!! Form::text('name', $perfil->name, ['class' => 'form-control', 'placeholder' => 'Nome do Perfil']) !!}
    </div>

    <div class="form-group">
        <!-- Campo email -->
        {!! Form::label('slug_label', 'Slug', ['class' => 'control-label']) !!}
        {!! Form::text('slug', $perfil->slug, ['class' => 'form-control', 'placeholder' => 'Ex.: professor']) !!}
    </div>

    <div class="form-group">
        <!-- Campo email -->
        {!! Form::label('description_label', 'Descrição', ['class' => 'control-label']) !!}
        {!! Form::text('description', $perfil->description, ['class' => 'form-control', 'placeholder' => 'Descrição do Perfil']) !!}
    </div>


    <div class="form-group">
        <!-- Campo status -->
        {!! Form::label('parent_label', 'Perfil Pai:', ['class' => 'control-label']) !!}
        {!! Form::select('parent_id', $roles , array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Atualizar Perfil', ['class' => 'btn btn-primary']) !!}

    </div>


</div>

<div>
    <p>
        <a href="{{ action('RoleController@index')}}" class="btn btn-default">Voltar </a>
    </p>    
</div>

@stop


