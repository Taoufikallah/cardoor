@extends('adminlte::page')

@section('content')
    <div class="box">
        <div class="portlet light">
            <div class="portlet-body">
                <div class="tabbable-custom nav-justified">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#detail" data-toggle="tab"><i class="fa fa-user"></i>Detail</a>
                        </li>
                        <li>
                            <a href="#email" data-toggle="tab"><i class="fa fa-envelove"></i>Email</a>
                        </li>
                        <li>
                            <a href="#password" data-toggle="tab"><i class="fa fa-lock"></i>Password</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="detail">
                            <div class="portlet-body form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-3 control-label">Name</label>
                                                    <div class="col-md-9">
                                                        <div class="form-control form-control-static">
                                                            @foreach ($user as $key => $value)
                                                                {{$value->name}}
                                                            @endforeach
                                                            <div class="form-control-focus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                        <label class="col-md-3 control-label">Email</label>
                                                        <div class="col-md-9">
                                                            <div class="form-control form-control-static">
                                                                @foreach ($user as $key => $value)
                                                                    {{$value->email}}
                                                                @endforeach
                                                                <div class="form-control-focus"></div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                        <label class="col-md-3 control-label">Password</label>
                                                        <div class="col-md-9">
                                                            <div class="form-control form-control-static">
                                                                *********
                                                                <div class="form-control-focus"></div>
                                                            </div>
                                                        </div>
                                                        </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="email">
                                <div class="portlet-body form">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <form  action="{{route('newEmail')}}" method="post" role="form" class="form-horizontal">
                                                <div class="form-body">
                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-3 control-label" for="[object Object]">New Email</label>
                                                        <div class="col-md-9">
                                                            <input type="email" class="form-control" name="email" value="">
                                                            <div class="form-control-focus"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                            <label class="col-md-3 control-label" for="[object Object]">Current Password </label>
                                                            <div class="col-md-9">
                                                                <input type="password" class="form-control" name="password" value="">
                                                                <div class="form-control-focus"></div>
                                                                {{-- <span class="help-block">Old Password</span> --}}
                                                            </div>
                                                        </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane " id="password">
                                    <div class="portlet-body form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form role="form" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="form-group form-md-line-input">
                                                            <label class="col-md-3 control-label">Password</label>
                                                            <div class="col-md-9">
                                                                <div class="form-control form-control-static">
                                                                    ********
                                                                    <div class="form-control-focus"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                            


                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_costom.css">
@endsection