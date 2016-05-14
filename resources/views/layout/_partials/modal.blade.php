<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmar Exclusão</h4>
            </div>

            <div class="modal-body">
                <p>Tem certeza que deseja excluir este item, esta ação é irreversível.</p>
                <p>Deseja continuar?</p>
                <p class="debug-url"></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Excluir</a>
            </div>
        </div>
    </div>
</div>

<!-- Create Perfil -->
<div class="modal fade" id="createperfil" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['method' => 'POST', 'name' => 'cadastro_peril']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Adicionar novo perfil</h4>
                </div>

                <div class="modal-body">
                    @include('layout._partials.forms.sistema.perfil')
                </div>

                <div class="modal-footer">
                    
                    {!! Form::submit('Cadastrar Perfil', ['class' => 'btn btn-primary', 'name' => 'cadastrar_perfil']) !!}
                        
            {!! Form::close() !!}
                    <div class="success margin-top-20">
                        @include('layout._partials.error')
                    </div>
                </div>
            
        </div>
    </div>
</div>

<!-- Editar Usuario-->
<div class="modal fade" id="modalEditarUsuario">
        <div class="modal-dialog">
                <div class="modal-content">

                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Editar Usuario</h4>
                        </div>

                        <div class="modal-body">
                                
                            <input type="hidden" name="id_usuario" id="id_usuario" value="">
                            
                                <div class="row">
                                        <div class="col-md-12">

                                                <div class="form-group">
                                                        <label for="field-1" class="control-label">Nome</label>

                                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                                                </div>	

                                        </div>

                                </div>

                                <div class="row">
                                        <div class="col-md-12">

                                                <div class="form-group">
                                                        <label for="field-3" class="control-label">E-mail</label>

                                                        <input type="text" name="email" class="form-control" id="email" placeholder="E-mail">
                                                </div>	

                                        </div>
                                </div>


                        </div>

                        <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-info">Atualizar</button>
                        </div>
                </div>
        </div>
</div>

<!-- Modal Bairro -->
<!-- ver bairro -->
<div class="modal fade" id="ver-bairro" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Ver bairro</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2"><b>ID</b></div>
                        <div class="col-sm-10" id="id"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"><b>Descrição</b></div>
                        <div class="col-sm-10" id="descricao"></div>
                    </div>
                </div>

            
        </div>
    </div>
</div>
<!-- Editar Bairro -->
<div class="modal fade" id="edit-bairro" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Ver bairro</h4>
            </div>

            <form id="frmBairro" name="frmBairro" class="form-horizontal" novalidate="">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="field-1" class="control-label">ID</label>

                            <input type="text" name="id" id="id" class="form-control" placeholder="Id">
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8">

                        <div class="form-group">
                            <label for="field-1" class="control-label">Descrição</label>

                            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição">
                        </div>

                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" value="salvar">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>
