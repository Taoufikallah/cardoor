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
                        <th>Create At</th>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        @foreach ($client as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                
                                
                                <td>{{ date(' M j Y', strtotime($value->created_at)) }}</td>
                                
                                <td>
                                    <a href="{{ route('client.show', $value->id) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open "></span></a>
                                    <a href="{{ route('client.edit', $value->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil "></span></a>
                                     {!! Form::open(['method' => 'POST', 'route' => ['brand.delete',$value->id], 'style' => 'display:inline' ]) !!}
                                    {!! Form::button('', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm glyphicon glyphicon-trash ']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
                {{-- {{ $car->links() }} --}}
            </div>
        </div>

        
    </div>
@endsection
