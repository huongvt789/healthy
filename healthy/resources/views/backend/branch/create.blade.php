@extends('layouts.backend.header')
@section('content')
    <div class="branch-create">
        <div class="title">
            <p>Add new</p>
        </div>
    </div>
    <div class="content-main">
        {!! Form::open(['route' => 'store', 'class' =>'form-group row background']) !!}
        <div class="content-form">
            <div class="form-group row">
                <div class="col-md-2 form-label">
                    {!! Form::label('', 'Name') !!}
                </div>
                <div class="col-md-10">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2 form-label">
                    {!! Form::label('', 'Overview') !!}
                </div>
                <div class="col-md-10">
                    {!! Form::textarea('overview', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="btn-perform-add ">
            {!! Form::button('BACK', ['class' => 'btn btn-primary btn-member-back']) !!}
            {!! Form::submit('SAVE', ['class' => 'btn btn-success btn-member']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@endsection