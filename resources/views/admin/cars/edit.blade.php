@extends('adminlte::page')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Update Car</h1>
                </div>
            </div>
                    
            <div class="row">
                {!! Form::model($car, ['route' => ['post.update', $car->id], 'method' => 'POST']) !!}
                

                <div class="col-md-8">
                    
                    {{ Form::label('title', 'Title:')}}
                    {{ Form::text('title', NULL, ['Class' => 'form-control input-lg']) }}
                
                    {{ Form::label('body', 'Body:', ['class' => 'form-spacing-top']) }}
                    {{ Form::textarea('body', NULL, ['class' => 'Form-control']) }}

                    {{-- {{ Form::label('price', 'Price:')}}
                    {{ Form::text('price', NULL, ['Class' => 'form-control input-lg']) }} --}}
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <dt>Create At:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($car->created_at))}}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Update At:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($car->updated_at))}}</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    {{ Html::linkroute('admin', 'Cancel', NULL, array('class' => 'btn btn-danger')) }}
                </div>

                <div class="col-md-6">
                    {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
                </div>
                
            </div>
            {!! Form::close() !!}
        </div>
@endsection
