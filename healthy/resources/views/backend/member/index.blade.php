@extends('layouts.backend.header')
@section('content')
    <div class="content">
        <a class="para-header">
            <a href="{{route('create')}}">Add new member</a>
    </div>
    <div class="para-content">
        <div class="content-search">

        </div>
        <div class="data-list">
            <div class="table-responsive">
                <table class="table table-hover">
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
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection