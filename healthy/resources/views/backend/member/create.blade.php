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
                        {!! Form::label('', 'Name') !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('member_name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'E-mail') !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Password') !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('password', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Phone') !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('member_phone', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Permission') !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('member_permission', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2 form-label">
                        {!! Form::label('', 'Branch') !!}
                    </div>
                    <div class="col-md-10">
                        {!! Form::text('branch', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-10 btn-perform">
                    {!! Form::button('BACK', ['class' => 'btn btn-primary btn-member-back']) !!}
                    {!! Form::submit('SAVE', ['class' => 'btn btn-success btn-member']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection