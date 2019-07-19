@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Car</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(array('action' => 'CarController@store' , 'data-parsley-validate' => '')) !!}
                
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}

                    {{ Form::label('body', 'Body') }}
                    {{ Form::textarea('body', NULL, array('class' => 'form-control' , 'required' => '')) }}

                    {{ Form::submit('Add Car', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}


                {!! Form::close() !!}
            </div>
        </div>
    </div>
    


@endsection