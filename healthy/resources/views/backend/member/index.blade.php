@extends('layouts.backend.header')
@section('content')
    <div class="content">
        <a class="para-header">
            <a href="{{route('create')}}">Add new member</a>
    </div>
    <div class="para-content">
        <div class="content-search">
            {!! Form::open(['method'=> 'get', 'class' =>'form-group row background']) !!}
                <div class="form-group">
                    {!! Form::text('name', isset($param['name'])? $param['name'] : '', ['placeholder' => 'Input keyword to search...', 'class' => 'form-control search']) !!}
                </div>
                <div class="form-group">
                    {!! Form::select('', ['Choose branch' ,
                       'Cats',
                       'Dogs']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="title-list">
            <h3>User list</h3>
        </div>
        <div class="data-list">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Branch</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($member as $item)
                    <tr>
                        <td>{{$item->member_name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->member_phone}}</td>
                        <td>{{$item->branch}}</td>
                        <td>{{$item->permission}}</td>
                        <td><p>q</p>
                            <p>b</p>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center">{{$member->links()}}</div>
    </div>
    </div>
@endsection