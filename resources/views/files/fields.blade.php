<!-- Title Field -->
<div class="cell small-6">
    {!! Form::label('title', 'Titulo:') !!}
    <div class="input-group">
        {!! Form::text('title', null, ['class' => 'input-group-field']) !!}
    </div>
</div>

<!-- Description Field -->
<div class="cell small-6">
    {!! Form::label('description', 'Descripcion:') !!}
    <div class="input-group">
        {!! Form::textarea('description', null, ['class' => 'input-group-field']) !!}
    </div>
</div>

<!-- Filename Field -->
<div class="cell small-6">
    {!! Form::label('filename', 'Archivo:') !!}
    <div class="input-group">
        {!! Form::file('filename') !!}
    </div>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="cell small-6 small-offset-4">
    <div class="button-group">
        {!! Form::submit('Guardar', ['class' => 'button primary']) !!}
        <a href="{!! url('el-club/documentos') !!}" class="button primary">Cancelar</a>
    </div>
</div>
