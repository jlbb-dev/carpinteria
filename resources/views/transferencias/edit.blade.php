@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Transferencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($transferencia, ['route' => ['transferencias.update', $transferencia->id], 'method' => 'patch']) !!}

                        @include('transferencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection