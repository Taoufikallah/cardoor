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
                    {{ Form::textarea('body', NULL, ['id' => 'article-ckeditor', 'class' => 'Form-control']) }}

                    {{ Form::label('price', 'Price:')}}
                    {{ Form::text('price', NULL, ['Class' => 'form-control input-lg']) }}
                   
                    <br>
                    {{ Form::label('fuel', 'Fuel') }}
                    {!! Form::select('fuel', array('G' => 'Gasoline', '' => 'Diesel'), 'D'); !!}
                    
                    <br><br>
                    {{ Form::label('year', 'Year') }}
                    {{ Form::text('year', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                    <br><br>
                    {{ Form::label('gearbox', 'Gearbox') }}
                    {!! Form::select('gearbox', array('M' => 'manual', '' => 'Automatic'), 'A')  !!}
                    <br><br>
                    {{ Form::label('cover_image','Upload Image:')}}
                    {{Form::file('cover_image')}}


                    
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
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
