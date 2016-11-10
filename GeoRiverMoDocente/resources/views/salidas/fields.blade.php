<!-- Programa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programa', 'Programa:') !!}
    {!! Form::select('programa', ['1' => '1', '2' => '2', '3' => '3', '4' => '4'], null, ['class' => 'form-control']) !!}
</div>

<!-- Asignatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asignatura', 'Asignatura:') !!}
    {!! Form::text('asignatura', null, ['class' => 'form-control']) !!}
</div>

<!-- Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salida', 'Salida:') !!}
    {!! Form::text('salida', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaInicio', 'Fechainicio:') !!}
    {!! Form::date('fechaInicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechafin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaFin', 'Fechafin:') !!}
    {!! Form::date('fechaFin', null, ['class' => 'form-control']) !!}
</div>

<!-- Semestre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semestre', 'Semestre:') !!}
    {!! Form::select('semestre', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('salidas.index') !!}" class="btn btn-default">Cancel</a>
</div>
