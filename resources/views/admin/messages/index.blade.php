@extends('adminlte::page')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Listes Clients</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Adress</th>
                        <th>City</th>
                        <th>Post Code</th>
                        <th>Country</th>
                        <th>Age</th>
                        <th>License</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        {{-- @foreach ($client as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->phone }}</td>
                                <td>{{ $value->adress }}</td>
                                <td>{{ $value->city }}</td>
                                <td>{{ $value->age }}</td>
                                <td>{{ $value->license }}</td>
                                
                                <td>{{ date(' M j Y', strtotime($value->created_at)) }}</td>
                                
                                <td>
                                    <a href="{{ route('brand.show', $value->id) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open "></span></a>
                                    <a href="{{ route('brand.edit', $value->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil "></span></a>
                                     {!! Form::open(['method' => 'POST', 'route' => ['brand.delete',$value->id], 'style' => 'display:inline' ]) !!}
                                    {!! Form::button('', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm glyphicon glyphicon-trash ']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                    @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

        
    </div>
@endsection
