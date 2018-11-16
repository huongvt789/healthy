@extends('layouts.backend.header')
@section('content')
    <div class="member-create">
        <head>
            <h1 class="title"><span class="glyphicon glyphicon-pencil"></span>Add</h1>
        </head>
        <div class="content-main">
            {!! Form::open(['route' => 'store', 'class' =>'form-group row background']) !!}
            <div class="content-form">
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Name',['class' => 'inline']), '<span class="text-danger"> *</span>'; !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('member_name', null, ['class' => ($errors->has('member_name')? 'has-error' : null).' form-control']) !!}
                        <div class="text-danger">
                            {!! $errors->first('member_name') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'E-mail',['class' => 'inline']), '<span class="text-danger"> *</span>'; !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('email', null, ['class' => 'form-control '.($errors->has('email')? 'has-error' : null)]) !!}
                        <div class="text-danger">
                            {!! $errors->first('email') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Password',['class' => 'inline']), '<span class="text-danger"> *</span>'; !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::password('password', ['class' => "form-control ".($errors->has('password')? 'has-error' : null)]) !!}
                        <div class="text-danger">
                            {!! $errors->first('password') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Phone',['class' => 'inline']), '<span class="text-danger"> *</span>'; !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('member_phone', null, ['class' => 'form-control '.($errors->has('member_phone')? 'has-error' : null)]) !!}
                        <div class="text-danger">
                            {!! $errors->first('member_phone') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Permission', ['class' => 'inline']), '<span class="text-danger"> *</span>'; !!}
                    </div>
                    <div class="col-md-6">
                        <select name="permission" class="form-control select-permission">
                            @foreach ($status as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            {!! $errors->first('permission') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Branch', ['class' => 'inline']), '<span class="text-danger"> *</span>';!!}
                    </div>
                    <div class="col-md-6">
                        <select name="branch" class="form-control select-branch">
                            @foreach ($branch as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">
                            {!! $errors->first('branch') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Date of birth', ['class' => 'inline']), '<span class="text-danger"> *</span>'; !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::date('age', null, ['class' => 'form-control '.($errors->has('age')? 'has-error' : null), 'id' => 'datepicker']) !!}
                        <div class="text-danger">
                            {!! $errors->first('age') !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Certificate') !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::textarea('certificate', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="btn-perform-add ">
                <button class="btn btn-primary btn-member-back"> <a href="/" style="color: white;">BACK</a></button>
                {!! Form::submit('SAVE', ['class' => 'btn btn-success btn-member']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection