@extends('layout.padrao')
@section('title', 'Perfil')

@section('title.descricao', 'Lista de Perfil')
@section('breadcrumbs', Breadcrumbs::render('sistema.perfil'))

@section('conteudo')
@include('flash::message')

@include('layout._partials.modal')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Perfil</h3>
    </div>
    <div class="panel-body">
        <p>
            <a href="{{ action('RoleController@create')}}" class="btn btn-info">Novo</a>     
        </p>
            <table id="example-1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example-1_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th style="width: 200px;">Nome</th>
                        <th style="width: 200px;">Slug</th>
                        <th style="width: 200px;">Descrição</th>
                        <th style="width: 200px;">Perfil Pai</th>
                        <th class="text-center" style="width: 70px;">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($perfis as $p)
                    <tr role="row" class="odd">
                        <td>{{$p->name}}</td>
                        <td>{{$p->slug}}</td>
                        <td>{{$p->description}}</td>
                        
                         <td class="text-center">
                        @if($p->parent == "")
                            <span class="label label-danger">{{ 'Nenhum' }}</span>
                        @else
                            <span class="label label-success">{{ $p->parent->name }}</span>
                        @endif
                        </td> 
                        <td class="text-center">  
                            <a class="fa-pencil" href="{{ action('RoleController@edit', $p->id) }}"></a>
                            <a href="#" class="fa-trash" data-href="{{ action('RoleController@delete', $p->id) }}" data-toggle="modal" data-target="#confirm-delete"></a><br>
                        </td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    
</div>

<script>
    $('#confirm-delete').on('show.bs.modal', function (e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
</script>

@stop


