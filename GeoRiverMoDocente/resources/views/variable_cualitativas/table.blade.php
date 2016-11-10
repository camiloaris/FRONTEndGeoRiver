<table class="table table-responsive" id="variableCualitativas-table">
    <thead>
        <th>Nombre</th>
        <th>Valor</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Estandar</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($variableCualitativas as $variableCualitativa)
        <tr>
            <td>{!! $variableCualitativa->nombre !!}</td>
            <td>{!! $variableCualitativa->valor !!}</td>
            <td>{!! $variableCualitativa->latitud !!}</td>
            <td>{!! $variableCualitativa->longitud !!}</td>
            <td>{!! $variableCualitativa->estandar !!}</td>
            <td>
                {!! Form::open(['route' => ['variableCualitativas.destroy', $variableCualitativa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('variableCualitativas.show', [$variableCualitativa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('variableCualitativas.edit', [$variableCualitativa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>