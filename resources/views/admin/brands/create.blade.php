@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Brand</h1>
            </div>
        </div>
        <div class="row">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-12">
                {{-- Create Form Brand--}}
               {!! Form::open(['action' => 'BrandController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', NULL, array('class' => 'form-control' , 'required' )) }}
                    </div>
                   
                   
                    
                    
                    {{ Form::submit('Add Brand', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}


                {!! Form::close() !!}
            </div>
        </div>
    </div>
    


@endsection