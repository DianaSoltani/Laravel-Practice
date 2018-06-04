@extends('layouts.app')

@section('header')
    <meta name="csrf_token" content="{{csrf_token()}}">
@stop

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <h1>Edit the Note</h1>
            <form method="POST" action="/notes/{{ $note->id }}">
                {{ csrf_field() }}
                {{ method_field("PATCH") }}
                <div class="form-group">
                    <textarea name="body" class="form-control">{{ $note->body }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save Note</button>
                </div>
            </form>
        </div>
    </div>
@stop