

<li class="{{ Request::is('travels*') ? 'active' : '' }}">
    <a href="{!! route('travels.index') !!}"><i class="fa fa-edit"></i><span>Salidas</span></a>
</li>


<li class="{{ Request::is('activities*') ? 'active' : '' }}">
    <a href="{!! route('activities.index') !!}"><i class="fa fa-edit"></i><span>Actividades</span></a>
</li>


<li class="{{ Request::is('variables*') ? 'active' : '' }}">
    <a href="{!! route('variables.index') !!}"><i class="fa fa-edit"></i><span>variables</span></a>
</li>


<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Usuarios</span></a>
</li>




<li class="{{ Request::is('locations*') ? 'active' : '' }}">
    <a href="{!! route('locations.index') !!}"><i class="fa fa-edit"></i><span>Ciudades</span></a>
</li>

