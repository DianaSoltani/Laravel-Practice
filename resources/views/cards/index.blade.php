@extends('layouts.app')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h1>My Cards</h1>
        <hr>
        @foreach($cards as $card)
            <div>
                <a href="/cards/{{$card->id}}"> {{$card->title}} </a>
            </div>
        @endforeach
    </div>
@stop