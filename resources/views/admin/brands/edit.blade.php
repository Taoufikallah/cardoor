@extends('adminlte::page')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Update Brand</h1>
                </div>
            </div>
                    
            <div class="row">
                {!! Form::model($brand, ['route' => ['brand.update', $brand->id], 'method' => 'POST']) !!}
                

                <div class="col-md-8">
                    
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', NULL, array('class' => 'form-control' , 'required')) }}
                    </div>
                   
                    
                    
                    
                    
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <dt>Create At:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($brand->created_at))}}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Update At:</dt>
                            <dd>{{ date('M j, Y h:ia', strtotime($brand->updated_at))}}</dd>
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
