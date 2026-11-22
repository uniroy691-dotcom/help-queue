
@extends('layouts.app')

@section('title', $topic->name)

@section('content')
    <h1>{{ $topic->name }}</h1>

    <p>{{ $tickets->count() }} tickets for this topic.</p>

    @forelse ($tickets as $ticket)
        @include('tickets._card', ['ticket' => $ticket])
    @empty
        <p>No tickets for this topic.</p>
    @endforelse

    <p>
        <a href="{{ route('tickets.index') }}">← Back to the queue</a>
    </p>
@endsection
