<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $activity->id !!}</p>
</div>

<!-- Nameactivity Field -->
<div class="form-group">
    {!! Form::label('nameActivity', 'Actividad:') !!}
    <p>{!! $activity->nameActivity !!}</p>
</div>

<!-- Namemember Field -->
<div class="form-group">
    {!! Form::label('nameMember', 'Integrantes:') !!}
    <p>{!! $activity->nameMember !!}</p>
</div>

<!-- Coordinateactivity Field -->
<div class="form-group">
    {!! Form::label('coordinateActivity', 'Coordenadas:') !!}
    <p>{!! $activity->coordinateActivity !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Clave:') !!}
    <p>{!! $activity->password !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{!! $activity->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Modificado el:') !!}
    <p>{!! $activity->updated_at !!}</p>
</div>

