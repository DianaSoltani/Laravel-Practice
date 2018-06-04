@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">My Cards</div>
                <div class="panel-body">
                    @foreach($cards as $card)
                        <div>
                            <a href="/cards/{{$card->id}}"> {{$card->title}} </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@stop