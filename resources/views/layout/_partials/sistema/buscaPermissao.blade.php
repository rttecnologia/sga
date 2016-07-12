<!-- Add usuário na permissao -->
<div class="modal fade" id="modal-addpermissao-perfil" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Adicionar Permissão</h4>
            </div>

            <form class="form-horizontal" novalidate="" action="{{ action('RoleController@addPermissionRole') }}">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="field-1" class="control-label">Usuário:</label>
                            <input type="hidden" name="id_perfil" value="{{$objeto->id}}">
                        </div>

                        <div class="col-sm-10">
                            <ul id="log" style="margin: 0; padding: 0; list-style: none;">

                            </ul>
                            <input type="text" id="search_users" class="form-control" placeholder="Nome ou Slug">
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

<script>
    var usuarios = [];
    function removeItem(id) {
        usuarios = $.grep(usuarios, function(val, index) {
            return val != id;
        });
    }

    function remove(id) {
        $("#user_"+id).hide();
        $("li:has('a'):contains('Edit group')").remove();
        removeItem(id);
    }

    $(function() {


        function log( message, id ) {
            $( "<li id='user_" + id + "' class='alert alert-default' style='padding: 2px 4px; margin: 0 0 5px 0;'>" ).html( message ).prependTo( "#log" );
        }


        function checkUserList(id) {
            //se o array não estiver vazio, ele busca pelo ID do usuario a ser adicionado
            if(usuarios.length != 0){
                //percorre todoo o array em busca de o ID selecionado já está adicionado
                for ( var i = 0, j = usuarios.length; i < j; i++ ) {
                    if(usuarios[i] == id){
                        return true;
                    }
                }
            }
        }

        $( "#search_users" ).autocomplete({
            source: "{{url('sistema/permissao/buscaPermissao')}}",
            minLength: 1,
            select: function( event, ui ) {

                if (checkUserList(ui.item.id)){
                    alert('A Permissão já foi adicionado!');
                    return false;
                }

                //adiciona novo elemento no final do array de usuários
                usuarios.push( ui.item.id );

                //adiciona no html o usuário selecionado
                log( ui.item ?
                "<button class=\"close\" type=\"button\" onclick=\"remove("+ui.item.id+")\"><span aria-hidden=\"true\">×</span></button>"+ui.item.value + "<input type='hidden' id='1' value='"+ui.item.id+"' name='permissions[]' ><br>":
                "Nothing selected, input was " + this.value , ui.item.id);

                //limpa o campo para digitar o nome do usuário procurado
                $(this).val("");
                return false;
            }
        });
    });

</script>