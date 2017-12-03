<table class="table table-responsive" id="files-table">
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
                <!--{!! Form::open(['route' => ['files.destroy', $files->id], 'method' => 'delete']) !!}-->
                <div class='btn-group'>
                    <a href="{!! route('files.show', [$files->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{{ url('files/download', [$files->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <!--<a href="{!! route('files.edit', [$files->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}-->
                </div>
                <!--{!! Form::close() !!}-->
            </td>
        </tr>
    @endforeach
    </tbody>
</table>