<table class="stack" id="users-table">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->firstname !!}</td>
            <td>{!! $user->lastname !!}</td>
            <td>{!! $user->email !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='button-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='clear button success'><i class="fi-eye size-21"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='clear button warning'><i class="fi-page-edit size-21"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>