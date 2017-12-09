@extends('layouts.app')

@section('content')
   <div class="grid-container fluid">
       @include('adminlte-templates::common.errors')
       <div class="grid-x grid-margin-x">
           <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
           <div class="cell small-12 medium-8 large-4">
               <div class="card">
                   <div class="card-divider">
                       <h1>Editar documento</h1>
                   </div>
                   <div class="card-section">
                       {!! Form::model($files, ['url' => ['el-club/documentos/'.$files->id.'/editar'], 'method' => 'patch']) !!}
                            @include('files.fields')
                       {!! Form::close() !!}
                   </div>
               </div>
           </div>
           <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
       </div>
   </div>
@endsection