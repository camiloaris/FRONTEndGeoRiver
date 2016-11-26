<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $variable->id !!}</p>
</div>

<!-- Namevariable Field -->
<div class="form-group">
    {!! Form::label('nameVariable', 'Nombre Variable:') !!}
    <p>{!! $variable->nameVariable !!}</p>
</div>

<!-- Value Field -->
<div class="form-group">
    {!! Form::label('value', 'Valor:') !!}
    <p>{!! $variable->value !!}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Foto:') !!}
    <p>{!! $variable->photo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{!! $variable->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Modificado el:') !!}
    <p>{!! $variable->updated_at !!}</p>
</div>

