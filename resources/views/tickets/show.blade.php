@extends('layouts.app')

@section('title', 'Ticket details')

@section('content')
    <h1>{{ $ticket->name }}</h1>

    <p><strong>Topic:</strong> {{ $ticket->topic }}</p>

    <p><strong>Description:</strong> {{ $ticket->description }}</p>

    <p><strong>Status:</strong> {{ $ticket->status }}</p>

    <p><strong>Created:</strong> {{ $ticket->created_at->diffForHumans() }}</p>

    <a href="/tickets">Back to queue</a>
@endsection