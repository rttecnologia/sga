@extends('layout.padrao')
@section('title', 'Thiago dos Santos Cidade')

@section('title.descricao', 'Atualizar cadastro')
@section('breadcrumbs', Breadcrumbs::render('secretaria.academico'))

@section('conteudo')
@include('flash::message')

@include('layout._partials.modal.delete')

<div class="row">

    <div class="col-md-12">

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#Dados-Pessoais" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-user"></i></span>
                    <span class="hidden-xs">Dados Pessoais</span>
                </a>
            </li>
            <li>
                <a href="#Endereco-Contato" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-phone"></i></span>
                    <span class="hidden-xs">Endereço e Contato</span>
                </a>
            </li>
            <li>
                <a href="#Dados-Complementares" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-navicon"></i></span>
                    <span class="hidden-xs">Dados Complementares</span>
                </a>
            </li>
            <li>
                <a href="#Ingresso" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-mortar-board"></i></span>
                    <span class="hidden-xs">Ingresso</span>
                </a>
            </li>
            <li>
                <a href="#Documentos" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-folder"></i></span>
                    <span class="hidden-xs">Documentos</span>
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active" id="Dados-Pessoais">

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="field-1" class="control-label">Nome</label>

                            <input type="text" class="form-control" id="field-1" placeholder="Nome Completo">
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-2" class="control-label">CPF</label>

                            <input type="text" class="form-control" id="field-2" placeholder="xxx.xxx.xxx-xx">
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-2" class="control-label">Data de Nascimento</label>

                            <input type="text" class="form-control" id="field-2" placeholder="dd/mm/aaaa">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="field-3" class="control-label">Local de Nascimento</label>

                            <input type="text" class="form-control" id="field-3" placeholder="Local de Nascimento">
                        </div>

                    </div>
                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="field-3" class="control-label">Estado</label>

                            <input type="text" class="form-control" id="field-3" placeholder="Estado">
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-3" class="control-label">Nacionalidade</label>

                            <input type="text" class="form-control" id="field-3" placeholder="Nacionalidade">
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-3" class="control-label">Sexo</label>

                            <select class="form-control" id="select-sexo">
                                <option>Selecione</option>
                                <option value="1">Masculino</option>
                                <option value="2">Feminino</option>
                            </select>

                         </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-4" class="control-label">RG</label>

                            <input type="text" class="form-control" id="field-4" placeholder="RG">
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-5" class="control-label">Orgão Expedidor</label>

                            <input type="text" class="form-control" id="field-5" placeholder="SSP/RR">
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-5" class="control-label">Estado Civil</label>

                            <select class="form-control" id="select-estadocivil">
                                <option>Selecione</option>
                                <option value="2">Solteiro(a)</option>
                                <option value="1">Casado(a)</option>
                                <option value="2">Divorciado(a)</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Nome do Pai</label>

                            <input type="text" class="form-control" id="field-5" placeholder="Nome do Pai">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Nome do Mãe</label>

                            <input type="text" class="form-control" id="field-5" placeholder="Nome do Mãe">
                        </div>

                    </div>
                </div>

            </div>

            <div class="tab-pane" id="Endereco-Contato">

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="field-1" class="control-label">Lagradouro</label>

                            <input type="text" class="form-control" id="field-1" placeholder="Rua, Av., Vicinal,...">
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="field-2" class="control-label">Número</label>

                            <input type="text" class="form-control" id="field-2" placeholder="9999">
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="field-2" class="control-label">Bairro</label>

                            <select class="form-control" id="select-bairro">
                                <option></option>
                                <option value="2">Aparecida</option>
                                <option value="1">Bairro dos Estados</option>
                                <option value="2">Cauamé</option>
                            </select>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="field-1" class="control-label">Cidade</label>

                            <input type="text" class="form-control" id="field-1" placeholder="Boa vista, Caracarai, Alto Alegre,...">
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="field-2" class="control-label">UF</label>

                            <select class="form-control" id="select-uf">
                                <option>Selecione</option>
                                <option value="1">AC</option>
                                <option value="2">AP</option>
                                <option value="2">PR</option>
                                <option value="2">RR</option>
                                <option value="2">RO</option>
                                <option value="2">SP</option>
                                <option value="2">RJ</option>
                                <option value="2">RN</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="field-2" class="control-label">CEP</label>

                            <input type="text" class="form-control" id="field-2" placeholder="69.211-98">

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-1" class="control-label">Telefone Residencial</label>

                            <input type="text" class="form-control" id="field-1" placeholder="(95) 3765-1233">
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="field-1" class="control-label">Telefone Celular</label>

                            <input type="text" class="form-control" id="field-1" placeholder="(95) 99765-9876">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="field-1" class="control-label">E-mail</label>

                            <input type="text" class="form-control" id="field-1" placeholder="academico@provedor.com">
                        </div>

                    </div>
                </div>

            </div>

            <div class="tab-pane" id="Dados-Complementares">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Deficiênte?</label>

                            <div class="input-group">
                                <div class="form-block">
                                    <label>
                                        <input type="checkbox" class="iswitch iswitch-success">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Tipo de Deficiência</label>

                            <input type="text" class="form-control" id="field-1" placeholder="Tipo de Deficiência">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Cor</label>

                            <select class="form-control" id="select-cor">
                                <option></option>
                                <option value="2">Branco</option>
                                <option value="1">Pardo</option>
                                <option value="2">Negro</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-1" class="control-label">TGD ou Outras Atividades</label>

                            <select class="form-control" id="select-tgd">
                                <option></option>
                                <option value="2">Sim</option>
                                <option value="1">Não</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Conveniado ou Bolsista?</label>

                            <select class="form-control" id="select-cb">
                                <option></option>
                                <option value="2">Sim</option>
                                <option value="1">Não</option>
                            </select>

                        </div>
                    </div>

                </div>

            </div>

            <div class="tab-pane" id="Ingresso">

                <div class="row">

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Data Ingresso</label>

                            <div class="input-group">
                                <input type="text" class="form-control datepicker" data-format="dd/mm/yyyy">

                                <div class="input-group-addon">
                                    <a href="#"><i class="linecons-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="field-2" class="control-label">Forma de Ingresso</label>

                            <select class="form-control" id="lista-formaingresso">
                                <option></option>
                                <option value="1">Vestibular</option>
                                <option value="2">SISU</option>
                                <option value="3">ENEM</option>
                            </select>

                        </div>

                    </div>

                    <div class="col-md-5">

                        <div class="form-group">
                            <label for="field-2" class="control-label">Instituição</label>

                            <select class="form-control" id="lista-instituicao">
                                <option></option>
                                <option value="2">FACETEN</option>
                            </select>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="field-2" class="control-label">Curso</label>

                            <select class="form-control" id="lista-curso">
                                <option></option>
                                <option value="1">Análise e Desenvolvimento de Sistemas</option>
                                <option value="2">Gestão Ambiental</option>
                                <option value="2">Gestão de Recursos Humanos</option>
                                <option value="2">Marketing</option>
                                <option value="2">Processos Gerenciais</option>
                                <option value="2">Radiologia</option>
                                <option value="2">Redes de Computadores</option>
                                <option value="2">Sistemas de Computação</option>
                            </select>

                        </div>

                    </div>

                </div>



            </div>

            <div class="tab-pane" id="Documentos">



                        <script type="text/javascript">
                            jQuery(document).ready(function($)
                            {
                                var i = 1,
                                        $example_dropzone_filetable = $("#example-dropzone-filetable"),
                                        example_dropzone = $("#advancedDropzone").dropzone({
                                            url: 'data/upload-file.php',

                                            // Events
                                            addedfile: function(file)
                                            {
                                                if(i == 1)
                                                {
                                                    $example_dropzone_filetable.find('tbody').html('');
                                                }

                                                var size = parseInt(file.size/1024, 10);
                                                size = size < 1024 ? (size + " KB") : (parseInt(size/1024, 10) + " MB");

                                                var $entry = $('<tr>\
													<td class="text-center">'+(i++)+'</td>\
													<td>'+file.name+'</td>\
													<td><div class="progress progress-striped"><div class="progress-bar progress-bar-warning"></div></div></td>\
													<td>'+size+'</td>\
													<td>Uploading...</td>\
												</tr>');

                                                $example_dropzone_filetable.find('tbody').append($entry);
                                                file.fileEntryTd = $entry;
                                                file.progressBar = $entry.find('.progress-bar');
                                            },

                                            uploadprogress: function(file, progress, bytesSent)
                                            {
                                                file.progressBar.width(progress + '%');
                                            },

                                            success: function(file)
                                            {
                                                file.fileEntryTd.find('td:last').html('<span class="text-success">Uploaded</span>');
                                                file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-success');
                                            },

                                            error: function(file)
                                            {
                                                file.fileEntryTd.find('td:last').html('<span class="text-danger">Failed</span>');
                                                file.progressBar.removeClass('progress-bar-warning').addClass('progress-bar-red');
                                            }
                                        });

                                $("#advancedDropzone").css({
                                    minHeight: 200
                                });

                            });
                        </script>

                        <br />
                        <div class="row">
                            <div class="col-sm-3 text-center">

                                <div id="advancedDropzone" class="droppable-area">
                                    Solte-os Aqui
                                </div>

                            </div>
                            <div class="col-sm-9">

                                <table class="table table-bordered table-striped" id="example-dropzone-filetable">
                                    <thead>
                                    <tr>
                                        <th width="1%" class="text-center">#</th>
                                        <th width="50%">Nome</th>
                                        <th width="15%">Upload</th>
                                        <th>Tamanho</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td colspan="5">Nenhum arquivo!</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>



            </div>

            <div style="margin-top: 30px; padding-top: 30px; border-top: 2px solid #eee;">
                <div class="row">
                    <div class="col-md-12">
                            <button class="btn btn-white" type="button">Cancelar</button>
                            <button class="btn btn-success" type="button" value="Salvar">Atualizar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@stop

@section('js')
    <script type="text/javascript">
        jQuery(document).ready(function($)
        {
            $("#select-sexo").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#select-estadocivil").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#select-bairro").select2({
                placeholder: 'Selecione',
                allowClear: true
            }).on('select2-open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
            });

            $("#select-uf").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#select-cor").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#select-tgd").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#select-cb").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#lista-formaingresso").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#lista-instituicao").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#lista-curso").select2({
                placeholder: 'Selecione o Curso...',
                allowClear: true
            }).on('select2-open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
            });

        });
    </script>

    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="/assets/js/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="/assets/js/select2/select2.css">
    <link rel="stylesheet" href="/assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="/assets/js/multiselect/css/multi-select.css">

    <script src="/assets/js/moment.min.js"></script>

    <!-- Imported scripts on this page -->
    <script src="/assets/js/daterangepicker/daterangepicker.js"></script>
    <script src="/assets/js/datepicker/bootstrap-datepicker.js"></script>
    <script src="/assets/js/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="/assets/js/colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="/assets/js/select2/select2.min.js"></script>
    <script src="/assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
    <script src="/assets/js/tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="/assets/js/typeahead.bundle.js"></script>
    <script src="/assets/js/handlebars.min.js"></script>
    <script src="/assets/js/multiselect/js/jquery.multi-select.js"></script>

    <script src="/assets/js/dropzone/dropzone.min.js"></script>

@endsection


