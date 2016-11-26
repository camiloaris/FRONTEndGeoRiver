<!-- Namelocation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nameLocation', 'NombreCiudad:') !!}
    {!! Form::text('nameLocation', null, ['class' => 'form-control']) !!}
</div>

<!-- Coordinate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordinate', 'Coordenada:') !!}
    {!! Form::text('coordinate', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('locations.index') !!}" class="btn btn-default">Cancelar</a>
</div>
