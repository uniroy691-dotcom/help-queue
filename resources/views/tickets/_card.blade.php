<article class="ticket">
    <strong>{{ isset($position) ? $position . '. ' : '' }}{{ $ticket->name }}</strong>
    <a href="{{ route('topics.show', $ticket->topic) }}" class="topic">
    {{ $ticket->topic->name }}
</a>
    <p>{{ $ticket->description }}</p>
    <a href="{{ route('tickets.show', $ticket) }}">Details</a>
</article>