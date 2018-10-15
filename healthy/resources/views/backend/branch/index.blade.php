@extends('layouts.backend.header')
@section('content')
    <div class="create" style="background-color: blue; width: 100px">
        <h3>
            <a class="create-branch" href="{{route('branch.create')}}" style="color: white">Add new</a>
        </h3>
    </div>
    <div class="list-content">
        <div class="header-title">
            <h3>List branch</h3>
        </div>
        <div class="main-list">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Overview</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($branch as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->overview}}</td>
                            <td>
                                <p>Edit</p>
                                <p>b</p>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection