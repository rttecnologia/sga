@extends('layout.padrao')
@section('title', 'Acadêmico')

@section('title.descricao', 'Adicionar novo acadêmico')
@section('breadcrumbs', Breadcrumbs::render('secretaria.academico'))

@section('conteudo')
@include('flash::message')

@include('layout._partials.modal')

<div class="row">

    <div class="col-md-12">

        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#home-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-home"></i></span>
                    <span class="hidden-xs">Dados Pessoais</span>
                </a>
            </li>
            <li>
                <a href="#endereco" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-envelope-o"></i></span>
                    <span class="hidden-xs">Endereço e Contato</span>
                </a>
            </li>
            <li>
                <a href="#profile-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-user"></i></span>
                    <span class="hidden-xs">Dados Complementares</span>
                </a>
            </li>
            <li>
                <a href="#ingresso" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-envelope-o"></i></span>
                    <span class="hidden-xs">Ingresso</span>
                </a>
            </li>
            <li>
                <a href="#messages-3" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-envelope-o"></i></span>
                    <span class="hidden-xs">Documentos</span>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home-3">

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

                            <select class="form-control" id="sboxit-1">
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

                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="field-5" class="control-label">Orgão Expedidor</label>

                            <input type="text" class="form-control" id="field-5" placeholder="SSP/RR">
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

            <div class="tab-pane" id="endereco">

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

                            <select class="form-control" id="s2example-1">
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

                            <select class="form-control" id="sboxit-2">
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

            <div class="tab-pane" id="profile-3">

                <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>

                <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>

            </div>

            <div class="tab-pane" id="messages-3">

                <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>

                <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>

            </div>

        </div>


    </div>
</div>

@stop

@section('js')
    <script type="text/javascript">
        jQuery(document).ready(function($)
        {
            $("#sboxit-1").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#sboxit-2").selectBoxIt({ showFirstOption: false }).on('open', function()
            {
                // Adding Custom Scrollbar
                $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
            });

            $("#s2example-1").select2({
                placeholder: 'Select your country...',
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

@endsection


