<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Nome" class="control-label">Nome</label>
            {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nome do Perfil']) !!}
        </div>	
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Nome" class="control-label">Slug</label>
            {!! Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'Ex.: Professor']) !!}
        </div>	
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Nome" class="control-label">Descição</label>
            {!! Form::textarea('descricao', '', ['rows' => '3', 'cols' => '5', 'class' => 'form-control', 'placeholder' => 'Descrição do Perfil']) !!}
        </div>	
    </div>
</div>