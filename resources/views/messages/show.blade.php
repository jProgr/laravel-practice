@extends('layouts.app')

@section('content')
    <h1 class="h3">Id: {{ $message->id }}</h1>
    @include('messages.message')
@stop
