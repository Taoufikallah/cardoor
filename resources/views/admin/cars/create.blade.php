@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create New Car</h1>
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
                {{-- Create Form Car--}}
               {!! Form::open(['action' => 'CarController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                    </div>
                   
                    <div class="form-group">
                        {{ Form::label('body', 'Body') }}
                        {{ Form::textarea('body', NULL, array( 'id' => 'article-ckeditor', 'class' => 'form-control' , 'required' => '')) }}
                     </div>
                    <div class="form-group">
                        {{ Form::label('price', 'Price') }}
                        {{ Form::text('price', NULL, array('class' => 'form-control' , 'required' => '', 'maxlength'=> '255')) }}
                    </div>
                    
                    
                    <div class="form-group">
                        {{ Form::label('fuel', 'Fuel') }}
                        {!! Form::select('fuel', array('Gasoline' => 'Gasoline', 'Diesel' => 'Diesel'), 'Diesel', ['class' => 'form-control' ]); !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('color', 'Color') }}
                        {{ Form::select ('color', ['1' => 'ARGENT', 
                                                  '2' => 'BEIGE', 
                                                  '3' => 'BLANC', 
                                                  '4' => 'BLANC CASSé',
                                                  '5' => 'BLEU',  
                                                  '6' => 'BORDEAUX', 
                                                  '7' => 'GRIS', 
                                                  '8' => 'IVOIRE', 
                                                  '9' => 'JAUNE', 
                                                  '10' => 'MARRON',
                                                  '11' => 'NOIR',
                                                  '12' => 'ROSE',
                                                  '13' => 'VERT',
                                                  '14' => 'VIOLET',
                                                  
                                                  
                                                ],
                                                   1 , ['id' =>'color','class' => 'form-control']) 
                                                   }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('year', 'Year') }}
                        {{ Form::select ('year', ['1' => '2000 ', 
                                                  '2' => ' 2001', 
                                                  '3' => ' 2002', 
                                                  '4' => ' 2003',
                                                  '5' => ' 2004',  
                                                  '6' => ' 2005', 
                                                  '7' => ' 2006', 
                                                  '8' => ' 2007', 
                                                  '9' => ' 2008', 
                                                  '10' => ' 2009',
                                                  '11' => ' 2010',
                                                  '12' => ' 2011',
                                                  '13' => ' 2012',
                                                  '14' => ' 2013',
                                                  '15' => ' 2014',
                                                  '16' => ' 2015',
                                                  '17' => ' 2016',
                                                  '18' => ' 2017',
                                                  '19' => ' 2018',
                                                  '20' => ' 2019',
                                                  
                                                ],
                                                   1 , ['id' =>'year','class' => 'form-control']) 
                                                   }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('gearbox', 'Gearbox') }}
                        {!! Form::select('gearbox', array('Manual' => 'manual', 'Automatic' => 'Automatic'), 'A', ['class' => 'form-control' ])  !!}
                    </div>
                    
                    <div class="form-group">
                            {{ Form::label('fiscal_power', 'Fiscal Power') }}
                            {{ Form::select ('fiscal_power', ['1' => ' ',
                                                               '2' => ' 2',
                                                                '3' => ' 3',
                                                                '4' => ' 4',
                                                                '5' => ' 5',
                                                                '6' => ' 6',
                                                                '8' => ' 7',
                                                                '8' => ' 8',
                                                                '9' => ' 9'],
                                                                2 , ['id' =>'select','class' => 'form-control']) }}
                        </div>

                    <div class="form-group">
                        {{ Form::label('number_doors', 'Number doors') }}
                        {{ Form::select ('number_doors', ['1' => ' ', '2' => ' 2', '2' => ' 3', '3' => ' 4', '4' => ' '], 2 , ['id' =>'number_doors','class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('number_places', 'Number place') }}
                        {{ Form::select ('number_places', ['1' => ' ',
                                                           '2' => ' 2',
                                                            '3' => ' 3',
                                                            '4' => ' 4',
                                                            '5' => ' 5',
                                                            '6' => ' 6',
                                                            '8' => ' 7',
                                                            '8' => ' 8',
                                                            '9' => ' 9'],
                                                            2 , ['id' =>'select','class' => 'form-control']) }}
                    </div>
                    
                    <div class="form-group">
                        {{ Form::label('cover_image','Upload Image:')}}
                        {{Form::file('cover_image')}}
                    </div>
                    
                    {{ Form::submit('Add Car', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top:20px')) }}


                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>


@endsection