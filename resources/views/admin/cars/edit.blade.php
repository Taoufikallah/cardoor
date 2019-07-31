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
                        {!! Form::select('fuel', array('G' => 'Gasoline', 'D' => 'Diesel'), 'D', ['class' => 'form-control' ]); !!}
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
                        {!! Form::select('gearbox', array('M' => 'manual', 'A' => 'Automatic'), 'A', ['class' => 'form-control' ])  !!}
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
                        {{ Form::select ('number_doors', ['1' => ' ', '2' => ' 2'], 2 , ['id' =>'number_doors','class' => 'form-control']) }}
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
