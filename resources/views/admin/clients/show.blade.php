@extends('adminlte::page')
    @section('content')
    <div class="container">
        {{-- <div class="row">
            <div class="col-md-12">
                <h1>{{ $client->title }}</h1>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Name</label>
                    <p class="lead">{{ $client->name }}</p>
                    <label for="">Email</label>
                    <p class="lead">{{ $client->email }}</p>
                    <label for="">Username</label>
                    <p class="lead">{{ $client->username }}</p>
                    
                </div>

            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Create At:</label>
                        <p> {{ date('M j, Y h:ia', strtotime($client->created_at)) }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Update At:</label>
                        <p> {{ date('M j, Y h:ia', strtotime($client->updated_at)) }}</p>
                    </dl>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{'/admin/clients'}}" class="btn btn-primary btn-block">See All client</a>
            </div>
        </div>
    </div>
@endsection
