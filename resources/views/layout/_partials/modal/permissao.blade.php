<!---------------------------------------------------
MODAL: add permissao, editar permissao e add usuario na permissao
---------------------------------------------------->
<script src="/assets/js/sistema/permissao.js"></script>
<!-- Add e Edit Permission -->
<div class="modal fade" id="modal-permissao" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">



            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" id="btn-cancelar" type="button">×</button>
                <h4 class="modal-title">Permissão</h4>
            </div>

            <form id="frmPermissao" name="frmPermissao">

            <div class="modal-body">

                @include('errors.error')

                <div class="row">
                    <div class="col-md-6">

                        <input type="hidden" id="id" name="id" class="form-control">

                        <div class="form-group">
                            <label class="control-label" for="field-1">Nome</label>

                            <input type="text" placeholder="Dashboard" id="name" name="name" class="form-control">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="control-label" for="field-2">Slug</label>

                            <input type="text" placeholder="view.dashboard" id="slug" name="slug" class="form-control">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group no-margin">
                            <label class="control-label" for="field-7">Descrição</label>

                            <textarea placeholder="Descrição da permissão" id="description" class="form-control autogrow" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 51px;"></textarea>
                        </div>

                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-white" id="btn-cancelar" type="button">Cancelar</button>
                <button class="btn btn-primary" type="button" id="btn-save" value="Salvar">Salvar</button>
            </div>

            </form>
        </div>

    </div>
</div>