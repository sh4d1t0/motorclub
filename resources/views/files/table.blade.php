<table class="table table-responsive" id="files-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Descripcion</th>
            <th>Filename</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($files as $files)
        <tr>
            <td><a href="{!! asset($files->filename) !!}">{!! $files->title !!}</a></td>
            <td>{!! $files->description !!}</td>
            <td>{!! $files->filename !!}</td>
            <td>
                {!! Form::open(['route' => ['files.destroy', $files->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('files.show', [$files->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('files.edit', [$files->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>