@extends('layouts.app')
@section('content')
    <div class="work">
        <div class="left">
            <div class="subject">Open All Tickets <span class="number">0</span></div>
            <div class="subject">My Tickets <span class="number">2</span></div>
            <div class="subject">All Tickets <span class="number">0</span></div>
            <div class="subject">Pending My Approval <span class="number">0</span></div>
        </div>
        <div class="right">
            <table class="table table-hover table-bordered table-striped table-sm">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Deadline</td>
                    <td>Domain</td>
                    <td>Requester</td>
                    <td>Status</td>
                    <td>Owner</td>
                    <td>Team</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach ( $tickets as $key => $ticket)
                <tr>
                    <td>ID</td>
                    <td>{{ $ticket->title }}</td>
                    <td>Deadline</td>
                    <td>{{ $ticket->domain }}</td>
                    <td>Requester</td>
                    <td>Status</td>
                    <td>Owner</td>
                    <td>Team</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->id) }}">Show</a>
                        <a href="{{ route('tickets.edit', $ticket->id) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection