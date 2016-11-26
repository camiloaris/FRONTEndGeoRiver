<!-- Namevariable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nameVariable', 'Nombre Variable:') !!}
    {!! Form::text('nameVariable', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Valor:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Foto:') !!}
    {!! Form::file('photo') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('variables.index') !!}" class="btn btn-default">Cancelar</a>
</div>
