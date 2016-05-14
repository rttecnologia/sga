@extends('layout.padrao')
@section('title', 'Usuários')
@section('title.descricao', 'Lista de Usuários do Sistema')
@section('breadcrumbs', Breadcrumbs::render('sistema.usuario'))

@section('conteudo')
@include('flash::message')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de usuários</h3>
    </div>
    <div class="panel-body">
        <p>
            <a href="{{ action('Auth\AuthController@getRegister')}}" class="btn btn-info">Novo</a>        
        </p>
            <table id="example-1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example-1_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th style="width: 200px;">Nome</th>
                        <th style="width: 200px;">E-mail</th>
                        <!-- <th class="text-center" style="width: 80px;">Telefone</th> -->
                        <th class="text-center" style="width: 70px;">Status</th>
                        <th class="text-center" style="width: 70px;">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $u)
                    <tr role="row" class="odd">
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <!-- <td>{{$u->password}}</td> -->
                         <td class="text-center">
                        @if($u->status == 1)
                            <span class="label label-success">{{ 'Ativo' }}</span>
                        @else
                            <span class="label label-danger">{{ 'Inativo' }}</span>
                        @endif
                        </td> 
                        <td class="text-center">  
                            <a class="fa-pencil" href="javascript: void(0);" onclick="EditarUsuario({{ $u->id }})"></a> 
                            <a class="fa-search" href="{{ action('Auth\AuthController@getRegister', array('registerView' => $u->id)) }}"></a>
                            <a class="fa-trash" href="#" data-href="{{ action('UsuarioController@delete', $u->id) }}" data-toggle="modal" data-target="#confirm-delete"></a><br>
                        </td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

</div>

@stop

@section('js')
<script>
    //confirmar do modal
    $('#confirm-delete').on('show.bs.modal', function (e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
</script>

<script>
    /*
     * Função que carrega após o DOM estiver carregado.
     * Como estou usando o ajaxForm no formulário, é aqui que eu o configuro.
     * Basicamente somente digo qual função será chamada quando os dados forem postados com sucesso.
     * Se o retorno for igual a 1, então somente recarrego a janela.
     */
//    $(function(){
//            $('#formulario_clientes').ajaxForm({
//                    success: function(data) {
//                            if (data == 1) {
//
//                                    //se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
//                                    document.location.href = document.location.href;
//
//                            }
//                    }
//            });
//    });

    //Aqui eu seto uma variável javascript com o base_url do CodeIgniter, para usar nas funções do post.
    var base_url = "http://localhost:8000";

        /*
         *	Esta função serve para preencher os campos do cliente na janela flutuante
         * usando jSon.  
         */
    function carregaDadosUsuarioJSon(id_usuario){
            $.post(base_url+'/sistema/usuario/dados_usuario.php', {
                    id: id_usuario
            }, function (data){
                    $('#nome').val(data.nome);
                    $('#email').val(data.email);
                    $('#id_usuario').val(data.id_usuario);//aqui eu seto a o input hidden com o id do cliente, para que a edição funcione. Em cada tela aberta, eu seto o id do cliente. 
            }, 'json');
    }

    function EditarUsuario(id_usuario){

            //antes de abrir a janela, preciso carregar os dados do cliente e preencher os campos dentro do modal
            //carregaDadosUsuarioJSon(id_usuario);

            $('#modalEditarUsuario').modal('show');
    }

</script>

@stop


