@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Laravel</h1>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            </ul>
        </nav>
    </div>
    <div class="row">
        @foreach($messages as $message)
            <div class="col-6 col-xs-6">
                <img src="{{ $message['image'] }}" class="img-thumbnail">
                <p class="card-text">
                    {{ $message['content'] }}
                    <a href="/messages/{{ $message['id'] }}">More</a>
                </p>
            </div>
        @endforeach
    </div>
@stop
