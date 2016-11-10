@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Variable Cualitativa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($variableCualitativa, ['route' => ['variableCualitativas.update', $variableCualitativa->id], 'method' => 'patch']) !!}

                        @include('variable_cualitativas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection