<table class="table table-responsive" id="travels-table">
    <thead>
        <th>Id Actividad</th>
        <th>Nombre Salida</th>
        <th>Descripcion</th>
        <th>Asignatura</th>
        <th>Clave</th>
        <th>Estado</th>
        <th>Programa</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($travels as $travel)
        <tr>
            <td>{!! $travel->idActivity !!}</td>
            <td>{!! $travel->nameTravel !!}</td>
            <td>{!! $travel->description !!}</td>
            <td>{!! $travel->course !!}</td>
            <td>{!! $travel->password !!}</td>
            <td>{!! $travel->state !!}</td>
            <td>{!! $travel->programme !!}</td>
            <td>
                {!! Form::open(['route' => ['travels.destroy', $travel->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('travels.show', [$travel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('travels.edit', [$travel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar la Salida?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>