@extends('layouts.app')
@section('content')
    <div class="detail-ticket">
        <div class="title-ticket">
            <h2>{{ $tickets->title }}</h2>
            <div class="ticket-type">Type: {{ $tickets->type }}</div>
        </div>

        <div class="ticket-body">
            <div class="left-side">
                @include('components.ticketStatus')
                @include('components.ticketInfo')
                @include('components.ticketLog')
                @include('components.ticketCommentShow',["comments" => $tickets->commentsAndNotesAndEvents()->sortBy('created_at')->reverse() ])
{{--{{$tickets->commentsAndNotesAndEvents()->sortBy('created_at')->reverse()}}--}}
<!--                --><?php //var_dump($tickets->commentsAndNotes()->get()->toArray());die; ?>
<!--                --><?php //var_dump($tickets->commentsAndNotesAndEvents()->sortBy('created_at')->reverse());die; ?>
                @include('components.ticketComment')
            </div>
            @include('components.ticketApplicant')
        </div>
    </div>
@endsection