<!---------------------------------------------------
MODAL: add permissao, editar permissao e add usuario na permissao
---------------------------------------------------->
<script src="/assets/js/sistema/perfil.js"></script>
<!-- Add e Edit Permission -->
<div class="modal fade" id="modal-perfil" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">



            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" id="btn-cancelar" type="button">×</button>
                <h4 class="modal-title">Perfil</h4>
            </div>

            <form id="frmPerfil" name="frmPerfil">

            <div class="modal-body">

                @include('errors.error')

                <div class="row">
                    <div class="col-md-6">

                        <input type="hidden" id="id" name="id" class="form-control">

                        <div class="form-group">
                            <label class="control-label" for="field-1">Nome</label>

                            <input type="text" placeholder="Administrador" id="name" name="name" class="form-control">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="control-label" for="field-2">Slug</label>

                            <input type="text" placeholder="Administrador" id="slug" name="slug" class="form-control">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="field-2">Perfil</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <select id="parent_id" class="form-control">
                                        @foreach ($perfis as $p)
                                            <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group no-margin">
                            <label class="control-label" for="field-7">Descrição</label>

                            <textarea placeholder="Descrição da permissão" id="description" name="description" class="form-control autogrow" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 51px;"></textarea>
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