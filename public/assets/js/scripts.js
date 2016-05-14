/********** Ver Bairro - Modal **********/
function modalBairro(id){
    var url = "/sistema/bairro";
    var id = id;

    $.get(url + '/' + id, function (data) {
        //success data
        console.log(data);
        $('#ver-bairro #id').html(data.id);
        $('#ver-bairro #descricao').html(data.descricao);
        $('#ver-bairro').modal('show');
    })
}

function modalEditBairro(id){
    var url = "/sistema/bairro";
    var id = id;

    $.get(url + '/' + id, function (data) {
        //success data
        console.log(data);
        $('#edit-bairro #id').val(data.id);
        $('#edit-bairro #descricao').val(data.descricao);
        $('#btn-save').val("update");
        $('#edit-bairro').modal('show');
    })
}

$(document).ready(function() {

    var url = "/sistema/bairro";

    //display modal form for creating new task
    $('#btn-add').click(function(){
        $('#btn-save').val("add");
        $('#frmBairro').trigger("reset");
        $('#edit-bairro').modal('show');
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
            id: $('#edit-bairro #id').val(),
            descricao: $('#edit-bairro #descricao').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();


        var type = "POST"; //for creating new resource
        var id = $('#edit-bairro #id').val();
        var my_url = url;

        if (state == "update"){
        type = "PUT"; //for updating existing resource
        my_url += '/' + id;
        }

        console.log(formData);

        $.ajax({

            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
            beforeSend: function(){
                $('#edit-bairro #btn-save').attr('class','btn btn-primary disabled');
                $('#edit-bairro #btn-save').html('Aguarde, Atualizando...');
            },
            success: function (data) {
                console.log(data);
            },
            complete: function(){
                //$('#edit-bairro #btn-save').attr('class','btn btn-primary');
                //$('#edit-bairro #btn-save').html('Salvar');
                //$('#frmBairro').trigger("reset");
                //$('#edit-bairro').modal('hide');
                window.location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });

});