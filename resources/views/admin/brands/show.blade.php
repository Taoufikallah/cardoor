@extends('adminlte::page')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>The lists Brands</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <p class="lead">{{ $brand->name }}</p>
                </div>

            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Create At:</label>
                        <p> {{ date('M j, Y h:ia', strtotime($brand->created_at)) }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Update At:</label>
                        <p> {{ date('M j, Y h:ia', strtotime($brand->updated_at)) }}</p>
                    </dl>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{'/admin/brands/'}}" class="btn btn-primary btn-block">See All Brands</a>
            </div>
        </div>
    </div>
@endsection
