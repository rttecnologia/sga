<!---------------------------------------------------
MODAL: bairro
---------------------------------------------------->
<script src="/assets/js/sistema/bairro.js"></script>
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
<!-- Editar e Cadastrar Bairro -->
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
