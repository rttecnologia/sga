<!---------------------------------------------------
MODAL: Associar Funcionalidade
---------------------------------------------------->
<!-- Editar e Cadastrar Bairro -->
<div class="modal fade" id="add-permissao" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Adicionar Usuário</h4>
            </div>

            <form class="form-horizontal" novalidate="" action="{{ action('PermissionController@addPermissionUser') }}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-2">
                        <label for="field-1" class="control-label">Usuário:</label>
                        <input type="hidden" name="id_permissao" value="{{$permissao->id}}">
                    </div>

                    <div class="col-sm-10">
                        <ul id="log" style="margin: 0; padding: 0; list-style: none;">

                        </ul>
                        <input type="text" id="search_users" class="form-control" placeholder="Nome ou E-mail">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Salvar">
            </div>
            </form>
        </div>
    </div>
</div>
