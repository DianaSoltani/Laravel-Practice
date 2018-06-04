@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('status'))
        <h3>{{ Session::get('status') }}</h3>
    @endif
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">

                <div class="panel-heading">Welcome!</div>

                <div class="panel-body">
                    @if(Auth::guest())
                        Please login or create a new account to access your cards.
                    @else
                        Go to your dashboard to access your cards.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
