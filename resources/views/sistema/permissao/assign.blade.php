@extends('layout.padrao')
@section('title', 'Permissão')
@section('title.descricao', 'Associar Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.permissao'))

@section('conteudo')

    <div class="panel panel-default">

        <div class="panel-heading">
            <div class="panel-title">
                Associar Permissão
            </div>
        </div>

        <div class="panel-body">

            @include('layout._partials.success')
            @include('layout._partials.error')
            @include('layout._partials.alert')

            {!! Form::open(array('action' =>'PermissionController@assignStore')) !!}




            <div class="form-group">
                {!! Form::submit('Associar Permissão', ['class' => 'btn btn-primary']) !!}
                <a href="{{ action('PermissionController@index')}}" class="btn btn-white">Voltar </a>
            </div>

            {!! Form::token() !!}

            {!! Form::close() !!}

        </div>

    </div>


@stop


