<div class="row">
    <div class="col-md-12">
       {!! Form::open(['action' => 'CarController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}

            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', NULL, array( 'id' => 'article-ckeditor', 'class' => 'form-control' , 'required' => '')) }}

            {{ Form::label('price', 'Price') }}
            {{ Form::text('price', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
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
            
            {{ Form::submit('Add Car', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}


        {!! Form::close() !!}
    </div>
</div>