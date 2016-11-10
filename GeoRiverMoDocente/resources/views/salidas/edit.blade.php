@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Salida
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($salida, ['route' => ['salidas.update', $salida->id], 'method' => 'patch']) !!}

                        @include('salidas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection