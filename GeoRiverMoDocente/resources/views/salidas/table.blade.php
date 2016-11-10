<table class="table table-responsive" id="salidas-table">
    <thead>
        <th>Programa</th>
        <th>Asignatura</th>
        <th>Salida</th>
        <th>Fechainicio</th>
        <th>Fechafin</th>
        <th>Semestre</th>
        <th>Password</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($salidas as $salida)
        <tr>
            <td>{!! $salida->programa !!}</td>
            <td>{!! $salida->asignatura !!}</td>
            <td>{!! $salida->salida !!}</td>
            <td>{!! $salida->fechaInicio !!}</td>
            <td>{!! $salida->fechaFin !!}</td>
            <td>{!! $salida->semestre !!}</td>
            <td>{!! $salida->password !!}</td>
            <td>
                {!! Form::open(['route' => ['salidas.destroy', $salida->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('salidas.show', [$salida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('salidas.edit', [$salida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>