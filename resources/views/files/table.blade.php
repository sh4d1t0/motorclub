<table class="stack" id="files-table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($files as $files)
        <tr>
            <td>{!! $files->title !!}</td>
            <td>{!! $files->description !!}</td>
            <td>
                <!--{//!! Form::open(['route' => ['files.destroy', $files->id], 'method' => 'delete']) !!}-->
                <div class='button-group'>
                    <a href="{{ url('el-club/documentos/'.$files->id.'/ver') }}" class='clear button primary'><i class="fi-eye size-21"></i></a>
                    <a href="{{ url('el-club/documentos/'.$files->id.'/descargar') }}" class='clear button primary'><i class="fi-page-export-pdf size-21"></i></a>
                    <!--<a href="{//!! route('files.edit', [$files->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {//!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}-->
                </div>
                <!--{//!! Form::close() !!}-->
            </td>
        </tr>
    @endforeach
    </tbody>
</table>