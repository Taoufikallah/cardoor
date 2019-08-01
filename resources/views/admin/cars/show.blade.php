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
                <div class="form-group">
                    <label for="">Description</label>
                    <p class="lead">{{ $car->body }}</p>
                </div>

                <div class="form-group">
                    <label for="">Price</label>
                    <p class="lead">{{ $car->price }}</p>
                </div>

                <div class="form-group">
                    <label for="">Fuel</label>
                    <p class="lead">{{ $car->fuel }}</p>
                </div>

                <div class="form-group">
                    <label for="">Color</label>
                    <p class="lead">{{ $car->color }}</p>
                </div>

                <div class="form-group">
                    <label for="">Year</label>
                    <p class="lead">{{ $car->year }}</p>
                </div>

                <div class="form-group">
                    <label for="">Fiscal Power</label>
                    <p class="lead">{{ $car->fiscal_power }}</p>
                </div>

                <div class="form-group">
                    <label for="">Number Doors</label>
                    <p class="lead">{{ $car->number_doors }}</p>
                </div>

                <div class="form-group">
                    <label for="">Number Places</label>
                    <p class="lead">{{ $car->number_places }}</p>
                </div>

                <div class="form-group">
                    <label for="">Gearbox</label>
                    <p class="lead">{{ $car->gearbox }}</p>
                </div>
                <div class="form-group">
                        <label for="">Brand</label>
                        <p class="lead"> @if($car->brand !== null)         
                                  {{  $car->brand->name }}
                                  @endif
                        </p>
                    </div>
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
