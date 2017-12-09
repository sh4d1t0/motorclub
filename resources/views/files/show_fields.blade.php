<!-- Id Field -->
<div class="cell small-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $files->id !!}</p>
</div>

<!-- Title Field -->
<div class="cell small-6">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $files->title !!}</p>
</div>

<!-- Description Field -->
<div class="cell small-6">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $files->description !!}</p>
</div>

<!-- Filename Field -->
<div class="cell small-6">
    {!! Form::label('filename', 'Filename:') !!}
    <p>{!! $files->filename !!}</p>
</div>

<!-- User Id Field -->
<div class="cell small-6">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $files->user_id !!}</p>
</div>

<!-- Created At Field -->
<div class="cell small-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $files->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="cell small-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $files->updated_at !!}</p>
</div>

