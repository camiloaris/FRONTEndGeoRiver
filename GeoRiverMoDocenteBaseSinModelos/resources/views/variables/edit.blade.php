@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Variable
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($variable, ['route' => ['variables.update', $variable->id], 'method' => 'patch']) !!}

                        @include('variables.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection