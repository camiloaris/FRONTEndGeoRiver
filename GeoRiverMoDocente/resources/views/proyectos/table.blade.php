<table class="table table-responsive" id="proyectos-table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Variable</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($proyectos as $proyecto)
        <tr>
            <td>{!! $proyecto->nombre !!}</td>
            <td>{!! $proyecto->descripcion !!}</td>
            <td>{!! $proyecto->variable !!}</td>
            <td>
                {!! Form::open(['route' => ['proyectos.destroy', $proyecto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('proyectos.show', [$proyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('proyectos.edit', [$proyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>