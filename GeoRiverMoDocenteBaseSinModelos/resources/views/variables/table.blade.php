<table class="table table-responsive" id="variables-table">
    <thead>
        <th>Nombre Variable</th>
        <th>Valor</th>
        <th>Foto</th>
        <th colspan="3">Accion</th>
    </thead>
    <tbody>
    @foreach($variables as $variable)
        <tr>
            <td>{!! $variable->nameVariable !!}</td>
            <td>{!! $variable->value !!}</td>
            <td>{!! $variable->photo !!}</td>
            <td>
                {!! Form::open(['route' => ['variables.destroy', $variable->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('variables.show', [$variable->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('variables.edit', [$variable->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar Variable')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>