@extends('adminlte::page')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add new car</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>create at</th>
                    <th class="text-center" width="130px"><a href="{{ route('post.create') }}" class="btn btn-primary btn-sm"><i class="glyphicon-plus"></i></a></th>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        @foreach ($car as $key => $value)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $value->title }}</td>
                                <td>{{ substr($value->body, 0, 40) }} {{ strlen($value->body) > 40 ? '....' : ""}}</td>
                                <td>{{ date(' M j Y', strtotime($value->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('post.show', $value->id) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open "></span></a>
                                    <a href="" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil "></span></a>
                                    <a href="" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash "></span></a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        
    </div>
@endsection
