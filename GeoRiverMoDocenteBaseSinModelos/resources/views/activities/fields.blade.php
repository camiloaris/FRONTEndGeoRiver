<!-- Nameactivity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nameActivity', 'Nombre:') !!}
    {!! Form::text('nameActivity', null, ['class' => 'form-control']) !!}
</div>

<!-- Namemember Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nameMember', 'Integrante:') !!}
    {!! Form::text('nameMember', null, ['class' => 'form-control']) !!}
</div>

<!-- Coordinateactivity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordinateActivity', 'Coordenadas:') !!}
    {!! Form::text('coordinateActivity', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Clave:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('activities.index') !!}" class="btn btn-default">Cancelar</a>
</div>
