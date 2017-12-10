<table class="table table-responsive" id="events-table">
    <thead>
        <tr>
            <th>Type Event</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Title</th>
        <th>Purpose</th>
        <th>Description</th>
        <th>Venue</th>
        <th>Kilometers</th>
        <th>Weather</th>
        <th>Ground</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($events as $events)
        <tr>
            <td>{!! $events->type_event !!}</td>
            <td>{!! $events->start_date !!}</td>
            <td>{!! $events->end_date !!}</td>
            <td>{!! $events->title !!}</td>
            <td>{!! $events->purpose !!}</td>
            <td>{!! $events->description !!}</td>
            <td>{!! $events->venue !!}</td>
            <td>{!! $events->kilometers !!}</td>
            <td>{!! $events->weather !!}</td>
            <td>{!! $events->ground !!}</td>
            <td>
                {!! Form::open(['route' => ['events.destroy', $events->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('events.show', [$events->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('events.edit', [$events->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>