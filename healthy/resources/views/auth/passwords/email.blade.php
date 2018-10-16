@extends('layouts.backend.app')
@section('content')
    <div class="container">
        <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading title">
                    <div class="panel-title text-center">Password Reset</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#">Sign
                            In</a></div>
                </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" class="form-horizontal" action="{{ route('password.email') }}"
                          aria-label="{{ __('Reset Password') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="email"
                                       class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            </div>
                            <div class="col-md-8">
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <button id="btn-signup" type="submit" class="btn btn-success">Send</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                    <a class="btn btn-link" href="{{route('login')}}" style="margin-left: 170px; margin-top: 20px;">
                                        Back to login!
                                    </a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
