@extends('layout.padrao')
@section('title', 'Perfil')
@section('title.descricao', 'Cadastrar Perfil')
@section('breadcrumbs', Breadcrumbs::render('sistema.perfil'))

@section('conteudo')

<div class="panel panel-default">
			
        <div class="panel-heading">
                <div class="panel-title">
                        Novo Perfil
                </div>
        </div>

        <div class="panel-body">
            
            @include('layout._partials.success')
            @include('layout._partials.error')
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
                                <!-- Campo status -->
                                {!! Form::label('parent_label', 'Perfil Pai:', ['class' => 'control-label']) !!}
                                {!! Form::select('parent_id', $perfil , array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                                {!! Form::submit('Cadastrar Perfil', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ action('RoleController@index')}}" class="btn btn-white">Voltar </a>
                        </div>

                {!! Form::token() !!}

                {!! Form::close() !!}

        </div>

</div>

<script>
    $(document).ready(function ($) {
        //$('input[name=telefone]').mask('(99) 99999-9999');
        $('input[name=telefone]').focusout(function(){
                var phone, element;
                element = $(this);
                element.unmask();
                phone = element.val().replace(/\D/g, '');
                if(phone.length > 10) {
                        element.mask("(99) 99999-9999");
                } else {
                        element.mask("(99) 9999-99999");
                }
        }).trigger('focusout');
    });
</script>
@stop


