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
                        {{ Form::select ('color', ['ARGENT' => 'ARGENT', 
                                                  'BEIGE' => 'BEIGE', 
                                                  'BLANC' => 'BLANC', 
                                                  'BLEU' => 'BLEU',  
                                                  'BORDEAUX' => 'BORDEAUX', 
                                                  'GRIS' => 'GRIS', 
                                                  'IVOIRE' => 'IVOIRE', 
                                                  'JAUNE' => 'JAUNE', 
                                                  'MARRON' => 'MARRON',
                                                  'NOIR' => 'NOIR',
                                                  'ROSE' => 'ROSE',
                                                  'VERT' => 'VERT',
                                                  'VIOLET' => 'VIOLET',
                                                  
                                                ],
                                                   1 , ['id' =>'color','class' => 'form-control']) 
                                                   }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('year', 'Year') }}
                        {{ Form::select ('year', ['2000' => '2000 ', 
                                                  '2001' => '2001 ', 
                                                  '2002' => '2002 ', 
                                                  '2003' => '2003 ',
                                                  '2004' => '2004 ',  
                                                  '2005' => '2005 ', 
                                                  '2006' => '2006 ', 
                                                  '2007' => '2007 ', 
                                                  '2008' => '2008 ', 
                                                  '2009' => '2009 ',
                                                  '2010' => '2010 ',
                                                  '2011' => '2011 ',
                                                  '2012' => '2012 ',
                                                  '2013' => '2013 ',
                                                  '2014' => '2014 ',
                                                  '2015' => '2015 ',
                                                  '2016' => '2016 ',
                                                  '2017' => '2017 ',
                                                  '2018' => '2018 ',
                                                  '2019' => '2019 ',
                                                  
                                                ],
                                                   1 , ['id' =>'year','class' => 'form-control']) 
                                                   }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('gearbox', 'Gearbox') }}
                        {!! Form::select('gearbox', array('Manual' => 'manual',
                                                          'Automatic' => 'Automatic'),
                                                           'A', ['class' => 'form-control' ])  !!}
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
                        {{ Form::select ('number_doors', ['1' => ' ', 
                                                          '2' => ' 2',
                                                           '3' => ' 3',
                                                            '4' => ' 4',
                                                             '5' => '5 '], 2 , 
                                                             ['id' =>'number_doors',
                                                             'class' => 'form-control']) }}
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
                        {{ Form::label('brand_id', 'Brand') }}
                       
                        {{ Form::select ('brand_id', $brands, null , ['id' =>'select','class' => 'form-control']) }}
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