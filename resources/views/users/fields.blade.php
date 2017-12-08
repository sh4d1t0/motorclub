<!-- Firstname Field -->
<div class="cell small-6">
    {!! Form::label('firstname', 'Nombre:') !!}
    <div class="input-group">
        {!! Form::text('firstname', null, ['class' => 'input-group-field']) !!}
    </div>
</div>

<!-- Lastname Field -->
<div class="cell small-6">
    {!! Form::label('lastname', 'Apellido:') !!}
    <div class="input-group">
        {!! Form::text('lastname', null, ['class' => 'input-group-field']) !!}
    </div>
</div>

<!-- Email Field -->
<div class="cell small-6">
    {!! Form::label('email', 'Email:') !!}
    <div class="input-group">
        {!! Form::email('email', null, ['class' => 'input-group-field', 'readonly' => true]) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="cell small-6 small-offset-5">
    <div class="button-group">
        {!! Form::submit('Guardar', ['class' => 'button primary']) !!}
        <a href="{!! route('home') !!}" class="button primary">Cancelar</a>
        <!--<a href="{!! route('users.index') !!}" class="btn btn-default">Cancelar</a>-->
    </div>
</div>
