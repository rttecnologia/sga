@extends('layout.padrao')
@section('title', 'Permissão')

@section('title.descricao', 'Lista de Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.permissao'))

@section('conteudo')
@include('flash::message')

@include('layout._partials.modal')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Permissão</h3>
    </div>
    <div class="panel-body">
            <p>
                <a href="{{ action('PermissionController@create')}}" class="btn btn-info">Novo</a>
                <a class="btn btn-info" href="{{ action('PermissionController@assign') }}">Associar</a>
            </p>

            <table id="example-1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example-1_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th style="width: 200px;">Nome</th>
                        <th style="width: 200px;">Slug</th>
                        <th style="width: 200px;">Descrição</th>
                        <th class="text-center" style="width: 70px;">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissao as $p)
                    <tr role="row" class="odd">
                        <td>{{$p->name}}</td>
                        <td>{{$p->slug}}</td>
                        <td>{{$p->description}}</td>
                        <td class="text-center">
                            <a class="fa-pencil" href="{{ action('PermissionController@edit', $p->id) }}"></a>
                            <a href="#" class="fa-trash" data-href="{{ action('PermissionController@delete', $p->id) }}" data-toggle="modal" data-target="#confirm-delete"></a><br>
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


