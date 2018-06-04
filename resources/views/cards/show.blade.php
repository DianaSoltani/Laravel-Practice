@extends('layouts.app')

@section('header')
    <meta name="csrf_token" content="{{csrf_token()}}">
@stop


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $card->title }}</div>
                <div class="panel-body">

                    <ul class="list-group">
                        @foreach($card->notes as $note)

                            <li class="list-group-item" href="/notes/{{ $note->id }}">
                                <a class="btn-sm btn-primary" href="/notes/{{ $note->id }}/edit">Edit</a>
                                {{$note->body}}
                                <a style= "float: right;" href="/users/{{$note->user->id}}">{{ $note->user->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <hr>
                    <h3>Add a New Note For This Card:</h3>
                    <form method="POST" action="/cards/{{ $card->id }}/notes">

                        {{ csrf_field() }}
                        {{ method_field('POST') }}

                        <div class="form-group">
                            <textarea name="body" class="form-control" required>{{ old('body') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Note</button>
                        </div>
                    </form>
                </div>
            @if(count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{error}}</li>
                    @endforeach
                </ul>
            @endif
            <!--{{ var_dump($errors) }}-->
            </div>
        </div>
    </div>
@stop