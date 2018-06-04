@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $user->name }}</div>
                <div class="panel-body">
                    <li>Email:
                        <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                    </li>
                </div>
            </div>

            <h1></h1>
            <hr>
            <h4></h4>
        </div>
    </div>
@endsection