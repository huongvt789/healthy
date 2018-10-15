@extends('layouts.backend.app')
@section('content')
    <div class="content container">
        <div class="login-box">
            <div class="panel panel-info">
                <div class="panel-heading title">
                    <div class="panel-title text-center">{{__('auth.title')}}</div>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'login', 'class' => 'form-horizontal']) !!}
                    <div class="col-md-12">
                        <div class="col-md-3">
                            {!! Form::label('','Email') !!}
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                {!! Form::text('email', old('email'),
                                ['class' => $errors->has('email') ? ' form-control is-invalid' : 'form-control',
                                'placeholder' => 'Enter username or email']) !!}
                                <p>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            {!! Form::label('','Password') !!}
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                {!! Form::text('password', null, ['class' => $errors->has('password') ? ' form-control is-invalid' : 'form-control', 'placeholder' => '*****' ]) !!}
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-4  offset-md-4 form-check">
                            {!! Form::checkbox('remember', old('remember') ? 'checked' : '') !!}
                            {!! Form::label('', 'Remember') !!}
                        </div>
                        <div class="col-md-8">
                            <input type="submit" id="company-save" class="btn btn-success" value="Login">
                            <input type="button" class="btn btn-primary" name = 'fb-login' value="Login with Facebook">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-centerx">
                            <a class="btn btn-link"  href="{{ route('password.request') }}" style="margin-left: 200px; margin-top: 20px;">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection