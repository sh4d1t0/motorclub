<!-- Type Event Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_event', 'Type Event:') !!}
    {!! Form::select('type_event', [], null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Purpose Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purpose', 'Purpose:') !!}
    {!! Form::text('purpose', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Venue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venue', 'Venue:') !!}
    {!! Form::text('venue', null, ['class' => 'form-control']) !!}
</div>

<!-- Kilometers Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kilometers', 'Kilometers:') !!}
    {!! Form::text('kilometers', null, ['class' => 'form-control']) !!}
</div>

<!-- Weather Field -->
<div class="form-group col-sm-6">
    {!! Form::label('weather', 'Weather:') !!}
    {!! Form::text('weather', null, ['class' => 'form-control']) !!}
</div>

<!-- Ground Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ground', 'Ground:') !!}
    {!! Form::text('ground', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('events.index') !!}" class="btn btn-default">Cancel</a>
</div>
