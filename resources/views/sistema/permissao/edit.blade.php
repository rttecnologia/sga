@extends('layout.padrao')
@section('title', 'Permissão')

@section('title.descricao', 'Editar Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.permissao'))

@section('conteudo')
    @include('flash::message')

    @include('layout._partials.success')
    @include('layout._partials.modal')


<div class="container">
    <h1>Editar Perfil</h1>

    {!! Form::model($permissao, ['method' => 'PATCH', 'action' => ['PermissionController@update', $permissao->id]]) !!}


    <div class="form-group">
        <!-- Campo Nome -->
        {!! Form::label('name_label', 'Nome', ['class' => 'control-label']) !!}
        {!! Form::text('name', $permissao->name, ['class' => 'form-control', 'placeholder' => 'Nome do Perfil']) !!}
    </div>

    <div class="form-group">
        <!-- Campo email -->
        {!! Form::label('slug_label', 'Slug', ['class' => 'control-label']) !!}
        {!! Form::text('slug', $permissao->slug, ['class' => 'form-control', 'placeholder' => 'Ex.: professor']) !!}
    </div>

    <div class="form-group">
        <!-- Campo email -->
        {!! Form::label('description_label', 'Descrição', ['class' => 'control-label']) !!}
        {!! Form::text('description', $permissao->description, ['class' => 'form-control', 'placeholder' => 'Descrição do Perfil']) !!}
    </div>


    

    <div class="form-group">
        {!! Form::submit('Atualizar Permissão', ['class' => 'btn btn-primary']) !!}

    </div>


</div>

<div>
    <p>
        <a href="{{ action('PermissionController@index')}}" class="btn btn-default">Voltar </a>
    </p>    
</div>

@stop


