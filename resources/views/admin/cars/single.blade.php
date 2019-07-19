@extends('adminlte::page')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $car->title }}</h1>
                <p>{{ $car->body }}</p>
            </div>
        </div>
    </div>
@endsection
