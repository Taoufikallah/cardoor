@extends('adminlte::page')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Listes Brands</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Brand</th>
                        <th>create at</th>
                    <th class="text-center" width="130px"><a href="{{ route('brand.create') }}" class="btn btn-primary btn-sm"><i class="glyphicon-plus"></i></a></th>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        @foreach ($brand as $key => $value)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $value->name }}</td>
                                
                                <td>{{ date(' M j Y', strtotime($value->created_at)) }}</td>
                                
                                <td>
                                    <a href="{{ route('brand.show', $value->id) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open "></span></a>
                                    <a href="{{ route('brand.edit', $value->id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil "></span></a>
                                    {!! Form::open(['method' => 'POST', 'route' => ['brand.delete',$value->id], 'style' => 'display:inline' ]) !!}
                                    {!! Form::button('', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm glyphicon glyphicon-trash ']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        
    </div>
@endsection
