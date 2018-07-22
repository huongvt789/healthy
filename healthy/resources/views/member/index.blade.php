@extends('layouts.backend.app')
@section('content')
    <div class="content container-fluid">
        <div class="login-box">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Login</div>
                    <div class="forgot-password">Forgot password ?</div>
                </div>
                <div class="panel-body">
                    <form action="" class="form-horizontal">
                        <div class="col-md-12">
                            <div class="col-md-3">User name</div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input id="login-username" type="text" class="form-control"
                                           name="username" value="" placeholder="Enter username or email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">Password</div>
                            <div class="createcol-md-9">
                                <div class="form-group">
                                    <input id="login-username" type="text" class="form-control"
                                           name="password" value="" placeholder="Enter password">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <label for="">
                                    <input type="checkbox" name="remember">Remember
                                </label>
                            </div>
                            <div class="col-md-9">
                                <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                                <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection