@extends('layout.padrao')
@section('title', 'Bairro')

@section('title.descricao', 'Lista de Bairros')
@section('breadcrumbs', Breadcrumbs::render('sistema.bairro'))

@section('conteudo')
@include('flash::message')

@include('layout._partials.modal.bairro')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Bairro</h3>
    </div>
    <div class="panel-body">
        <p>
            <a href="javascript: void(0);" class="btn btn-info" id="btn-add">Novo</a>
        </p>
            <table id="example-1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example-1_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th style="width: 30px;">Id</th>
                        <th>Descrição</th>
                        <th class="text-center" style="width: 100px;">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bairros as $b)
                    <tr role="row" class="odd">
                        <td>{{$b->id}}</td>
                        <td>{{$b->descricao}}</td>
                        <td class="text-center">  
                            <a class="fa-pencil" href="javascript: void(0);" onclick="modalEditBairro({{$b->id}})"></a>
                            <a class="fa-search" href="javascript: void(0);" onclick="modalBairro({{$b->id}})"></a>
                            <a href="#" class="fa-trash" data-href="" data-toggle="modal" data-target="#confirm-delete"></a><br>
                        </td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    
</div>
@stop


