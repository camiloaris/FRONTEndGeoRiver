<table class="table table-responsive" id="variableCuantitativas-table">
    <thead>
        <th>Nombre</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Valor</th>
        <th>Estandar</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($variableCuantitativas as $variableCuantitativa)
        <tr>
            <td>{!! $variableCuantitativa->nombre !!}</td>
            <td>{!! $variableCuantitativa->latitud !!}</td>
            <td>{!! $variableCuantitativa->longitud !!}</td>
            <td>{!! $variableCuantitativa->valor !!}</td>
            <td>{!! $variableCuantitativa->estandar !!}</td>
            <td>
                {!! Form::open(['route' => ['variableCuantitativas.destroy', $variableCuantitativa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('variableCuantitativas.show', [$variableCuantitativa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('variableCuantitativas.edit', [$variableCuantitativa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>