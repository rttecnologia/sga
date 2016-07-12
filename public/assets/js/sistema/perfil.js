/********** Ver Bairro - Modal **********/
// function modalBairro(id){
//     var url = "/sistema/bairro";
//     var id = id;
//
//     $.get(url + '/' + id, function (data) {
//         //success data
//         console.log(data);
//         $('#ver-bairro #id').html(data.id);
//         $('#ver-bairro #descricao').html(data.descricao);
//         $('#ver-bairro').modal('show');
//     })
// }

function modalEditPerfil(id){

    var url = "/sistema/perfil";
    var id = id;

    $.get(url + '/edit/' + id, function (data) {

        //success data
        console.log(data);
         $('#modal-perfil #id').val(data.id);
         $('#modal-perfil #name').val(data.name);
         $('#modal-perfil #slug').val(data.slug);
         $('#modal-perfil #parent_id').val(data.parent_id);
         $('#modal-perfil #description').val(data.description);
         $('#btn-save').val("update");


        $('#modal-perfil').modal('show');
    })
}

$(document).ready(function() {

    var url = "/sistema/perfil";

    //display modal form for creating new task
    $('#btn-add').click(function(){
        $('#btn-save').val("add");
        $('#frmPerfil').trigger("reset");
        $('#modal-perfil').modal('show');
    });

    $('#btn-cancelar').click(function(){
        $('#frmPerfil').trigger("reset");
        $('#modal-perfil #errors').css('display','none');
    });

    //create new task / update existing task
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

        var formData = {
            id: $('#modal-perfil #id').val(),
            name: $('#modal-perfil #name').val(),
            slug: $('#modal-perfil #slug').val(),
            description: $('#modal-perfil #description').val(),
            parent_id: $('#modal-perfil #parent_id').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();


        var type = "POST"; //for creating new resource
        var id = $('#modal-perfil #id').val();
        var my_url = url + '/store';

        if (state == "update"){
        type = "PATCH"; //for updating existing resource
        my_url = url + '/update/' + id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            beforeSend: function(){
                $('#modal-perfil #btn-save').attr('class','btn btn-primary disabled');
                $('#modal-perfil #btn-save').html('Aguarde, Atualizando...');
            },
            success: function (data) {
                if (data.responseText){
                    alert(data.responseText);

                }
            },
            error: function (data) {

                if (data.responseText){
                    //console.log('Error:', data);

                    $('#modal-perfil #btn-save').attr('class','btn btn-primary');
                    $('#modal-perfil #btn-save').html('Salvar');
                    $('#modal-perfil #errors').css('display','block');

                    var errors = data.responseJSON;
                    var errorsHtml= '';
                    $.each( errors, function( key, value ) {
                        errorsHtml += '<li>' + value[0] + '</li>';
                    });
                    //toastr.error( errorsHtml , "Error " + jqXhr.status +': '+ errorThrown);

                    $('#errors div ul').html(errorsHtml);
                }else{
                    $('#modal-perfil #errors').css('display','none');
                    window.location.reload();
                }

            }
        });

    });

});

