@extends('adminlte::page')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $car->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p class="lead">{{ $car->body }}</p>
                <img style="width:100%" src="/storage/app/public/cover_images/{{$car->cover_image}}">
            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Create At:</label>
                        <p> {{ date('M j, Y h:ia', strtotime($car->created_at)) }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Update At:</label>
                        <p> {{ date('M j, Y h:ia', strtotime($car->updated_at)) }}</p>
                    </dl>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{'admin/cars/'}}" class="btn btn-primary btn-block">See All Cars</a>
            </div>
        </div>
    </div>
@endsection
