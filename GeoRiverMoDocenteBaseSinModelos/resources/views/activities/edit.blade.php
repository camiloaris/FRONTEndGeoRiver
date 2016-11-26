@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actividad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($activity, ['route' => ['activities.update', $activity->id], 'method' => 'patch']) !!}

                        @include('activities.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection