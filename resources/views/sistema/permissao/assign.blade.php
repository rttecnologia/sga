@extends('layout.padrao')
@section('title', 'Permissão')
@section('title.descricao', 'Associar Permissão')
@section('breadcrumbs', Breadcrumbs::render('sistema.permissao'))

@section('conteudo')

    <div class="panel panel-default">

        <div class="panel-heading">
            <div class="panel-title">
                Associar Permissão
            </div>
        </div>

        <div class="panel-body">

            @include('layout._partials.success')
            @include('errors.error')
            @include('layout._partials.alert')

            {!! Form::open(array('action' =>'PermissionController@assignStore')) !!}



            <div class="col-sm-9">


            <select class="form-control" multiple="multiple" id="multi-select" name="my-select[]" style="position: absolute; left: -9999px;">
                <option value="1">Silky Door</option>
                <option value="2">The Absent Twilight</option>
                <option value="3">Tales of Flames</option>
                <option value="4">The Princess's Dream</option>
                <option value="5">The Fairy of the Wind</option>
                <option value="6">Children in the Boy</option>
                <option value="7">Frozen Savior</option>
                <option value="8">The Missing Thorns</option>
                <option value="9">Healing of Serpent</option>
                <option value="10">The Voyagers's Girlfriend</option>
                <option value="11">The Nothing of the Gate</option>
                <option value="12">Healing in the Scent</option>
                <option value="13">Final Twins</option>
                <option value="14">The Willing Rose</option>
                <option value="15">Thorn of Emperor</option>
                <option value="16" selected="">The Predator's Pirates</option>
                <option value="17">The Lord of the Girl</option>
                <option value="18" selected="">Flowers in the Spirit</option>
                <option value="19" selected="">Healing in the Silence</option>
                <option value="20">Planet of Bridges</option>
            </select>
                <div class="ms-container" id="ms-multi-select">
                    <div class="ms-selectable">
                        <ul class="ms-list ps-container ps-active-y" tabindex="-1">
                            <li class="ms-elem-selectable" id="49-selectable"><span>Silky Door</span></li>
                            <li class="ms-elem-selectable" id="50-selectable"><span>The Absent Twilight</span></li>
                            <li class="ms-elem-selectable ms-selected" id="51-selectable" style="display: none;"><span>Tales of Flames</span></li>
                            <li class="ms-elem-selectable" id="52-selectable"><span>The Princess's Dream</span></li>
                            <li class="ms-elem-selectable" id="53-selectable"><span>The Fairy of the Wind</span></li>
                            <li class="ms-elem-selectable" id="54-selectable"><span>Children in the Boy</span></li>
                            <li class="ms-elem-selectable" id="55-selectable"><span>Frozen Savior</span></li>
                            <li class="ms-elem-selectable" id="56-selectable"><span>The Missing Thorns</span></li>
                            <li class="ms-elem-selectable" id="57-selectable"><span>Healing of Serpent</span></li>
                            <li class="ms-elem-selectable" id="1567-selectable"><span>The Voyagers's Girlfriend</span></li>
                            <li class="ms-elem-selectable" id="1568-selectable"><span>The Nothing of the Gate</span></li>
                            <li class="ms-elem-selectable" id="1569-selectable"><span>Healing in the Scent</span></li>
                            <li class="ms-elem-selectable" id="1570-selectable"><span>Final Twins</span></li>
                            <li class="ms-elem-selectable" id="1571-selectable"><span>The Willing Rose</span></li>
                            <li class="ms-elem-selectable" id="1572-selectable"><span>Thorn of Emperor</span></li>
                            <li selected="" class="ms-elem-selectable" id="1573-selectable"><span>The Predator's Pirates</span></li>
                            <li class="ms-elem-selectable" id="1574-selectable"><span>The Lord of the Girl</span></li>
                            <li selected="" class="ms-elem-selectable" id="1575-selectable"><span>Flowers in the Spirit</span></li>
                            <li selected="" class="ms-elem-selectable" id="1576-selectable"><span>Healing in the Silence</span></li>
                            <li class="ms-elem-selectable" id="1598-selectable"><span>Planet of Bridges</span></li>

                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                                <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 198px; right: 2px;">
                                <div class="ps-scrollbar-y" style="top: 0px; height: 79px;"></div></div></ul></div><div class="ms-selection"><ul class="ms-list ps-container" tabindex="-1"><li class="ms-elem-selection" id="49-selection" style="display: none;"><span>Silky Door</span></li><li class="ms-elem-selection" id="50-selection" style="display: none;"><span>The Absent Twilight</span></li><li class="ms-elem-selection ms-selected" id="51-selection" style=""><span>Tales of Flames</span></li><li class="ms-elem-selection" id="52-selection" style="display: none;"><span>The Princess's Dream</span></li><li class="ms-elem-selection" id="53-selection" style="display: none;"><span>The Fairy of the Wind</span></li><li class="ms-elem-selection" id="54-selection" style="display: none;"><span>Children in the Boy</span></li><li class="ms-elem-selection" id="55-selection" style="display: none;"><span>Frozen Savior</span></li><li class="ms-elem-selection" id="56-selection" style="display: none;"><span>The Missing Thorns</span></li><li class="ms-elem-selection" id="57-selection" style="display: none;"><span>Healing of Serpent</span></li><li class="ms-elem-selection" id="1567-selection" style="display: none;"><span>The Voyagers's Girlfriend</span></li><li class="ms-elem-selection" id="1568-selection" style="display: none;"><span>The Nothing of the Gate</span></li><li class="ms-elem-selection" id="1569-selection" style="display: none;"><span>Healing in the Scent</span></li><li class="ms-elem-selection" id="1570-selection" style="display: none;"><span>Final Twins</span></li><li class="ms-elem-selection" id="1571-selection" style="display: none;"><span>The Willing Rose</span></li><li class="ms-elem-selection" id="1572-selection" style="display: none;"><span>Thorn of Emperor</span></li><li selected="" class="ms-elem-selection" id="1573-selection" style="display: none;"><span>The Predator's Pirates</span></li><li class="ms-elem-selection" id="1574-selection" style="display: none;"><span>The Lord of the Girl</span></li><li selected="" class="ms-elem-selection" id="1575-selection" style="display: none;"><span>Flowers in the Spirit</span></li><li selected="" class="ms-elem-selection" id="1576-selection" style="display: none;"><span>Healing in the Silence</span></li><li class="ms-elem-selection" id="1598-selection" style="display: none;"><span>Planet of Bridges</span></li><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 2px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></ul></div></div> </div>



            <div class="form-group">
                {!! Form::submit('Associar Permissão', ['class' => 'btn btn-primary']) !!}
                <a href="{{ action('PermissionController@index')}}" class="btn btn-white">Voltar </a>
            </div>

            {!! Form::token() !!}

            {!! Form::close() !!}

        </div>

    </div>

@stop

@section('js')
    <script type="text/javascript">

        jQuery(document).ready(function($)
        {
            $("#multi-select").multiSelect({
                afterInit: function()
                {
// Add alternative scrollbar to list
                    this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
                },
                afterSelect: function()
                {
// Update scrollbar size
                    this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
                }
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