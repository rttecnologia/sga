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

function modalEditPermission(id){
    var url = "/sistema/permissao";
    var id = id;

    $.get(url + '/edit/' + id, function (data) {
        //success data
        console.log(data);
        $('#modal-permissao #id').val(data.id);
        $('#modal-permissao #name').val(data.name);
        $('#modal-permissao #slug').val(data.slug);
        $('#modal-permissao #description').val(data.description);
        $('#btn-save').val("update");
        $('#modal-permissao').modal('show');
    })
}

$(document).ready(function() {

    var url = "/sistema/permissao";

    //display modal form for creating new task
    $('#btn-add').click(function(){
        $('#btn-save').val("add");
        $('#frmPermissao').trigger("reset");
        $('#modal-permissao').modal('show');
    });

    $('#btn-cancelar').click(function(){
        $('#frmPermissao').trigger("reset");
        $('#modal-permissao #errors').css('display','none');
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
            id: $('#modal-permissao #id').val(),
            name: $('#modal-permissao #name').val(),
            slug: $('#modal-permissao #slug').val(),
            description: $('#modal-permissao #description').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();


        var type = "POST"; //for creating new resource
        var id = $('#modal-permissao #id').val();
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
                $('#modal-permissao #btn-save').attr('class','btn btn-primary disabled');
                $('#modal-permissao #btn-save').html('Aguarde, Atualizando...');
            },
            success: function (data) {
                if (data.responseText){
                    alert(data.responseText);

                }
            },
            error: function (data) {

                if (data.responseText){
                    //console.log('Error:', data);

                    $('#modal-permissao #btn-save').attr('class','btn btn-primary');
                    $('#modal-permissao #btn-save').html('Salvar');
                    $('#modal-permissao #errors').css('display','block');

                    var errors = data.responseJSON;
                    var errorsHtml= '';
                    $.each( errors, function( key, value ) {
                        errorsHtml += '<li>' + value[0] + '</li>';
                    });
                    //toastr.error( errorsHtml , "Error " + jqXhr.status +': '+ errorThrown);

                    $('#errors div ul').html(errorsHtml);
                }else{
                    $('#modal-permissao #errors').css('display','none');
                    window.location.reload();
                }

            }
        });

    });

});

