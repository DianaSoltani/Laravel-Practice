@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading"> My Cards </div>
                <div class="panel-body">

                    @foreach($cards as $card)
                        <div>
                            <a class="btn btn-primary col-md-10 col-md-offset-1" href="/cards/{{$card->id}}"> {{$card->title}} </a>
                        </div>
                    @endforeach


                </div>
                <div class="panel-footer">
                    <!--small return link-->
                    <a class="btn btn-primary btn-sm" href="http://localhost:8000/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection