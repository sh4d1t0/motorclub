<!-- Type Event Field -->
<div class="cell small-6">
    {!! Form::label('type_event', 'Type Event:') !!}
    <div class="input-group">
        {!! Form::select('type_event', [], null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Start Date Field -->
<div class="cell small-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    <div class="input-group">
        {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- End Date Field -->
<div class="cell small-6">
    {!! Form::label('end_date', 'End Date:') !!}
    <div class="input-group">
        {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Title Field -->
<div class="cell small-6">
    {!! Form::label('title', 'Title:') !!}
    <div class="input-group">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Purpose Field -->
<div class="cell small-6">
    {!! Form::label('purpose', 'Purpose:') !!}
    <div class="input-group">
        {!! Form::text('purpose', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Description Field -->
<div class="cell small-6">
    {!! Form::label('description', 'Description:') !!}
    <div class="input-group">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Venue Field -->
<div class="cell small-6">
    {!! Form::label('venue', 'Venue:') !!}
    <div class="input-group">
        {!! Form::text('venue', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Kilometers Field -->
<div class="cell small-6">
    {!! Form::label('kilometers', 'Kilometers:') !!}
    <div class="input-group">
        {!! Form::text('kilometers', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Weather Field -->
<div class="cell small-6">
    {!! Form::label('weather', 'Weather:') !!}
    <div class="input-group">
        {!! Form::text('weather', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Ground Field -->
<div class="cell small-6">
    {!! Form::label('ground', 'Ground:') !!}
    <div class="input-group">
        {!! Form::text('ground', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Submit Field -->
<div class="cell small-12">
    <div class="button-group">
        {!! Form::submit('Guardar', ['class' => 'button primary']) !!}
        <a href="{!! route('events.index') !!}" class="btn btn-default">Cancelar</a>
    </div>
</div>
