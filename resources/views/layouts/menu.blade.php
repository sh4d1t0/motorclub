<li class="{{ Request::is('files*') ? 'active' : '' }}">
    <a href="{!! route('files.index') !!}"><i class="fa fa-edit"></i><span>Files</span></a>
</li>

<li class="{{ Request::is('events*') ? 'active' : '' }}">
    <a href="{!! route('events.index') !!}"><i class="fa fa-edit"></i><span>Events</span></a>
</li>

