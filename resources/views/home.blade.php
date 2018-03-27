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
                    <td>Name</td>
                    <td>Deadline</td>
                    <td>Domain</td>
                    <td>Requester</td>
                    <td>Status</td>
                    <td>Owner</td>
                    <td>Team</td>
                    <td>Type</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Rasised At</td>
                    <td>Rasised By</td>
                    <td>Last Updated</td>
                    <td>Status</td>
                    <td>Owner</td>
                    <td>Team</td>
                    <td>Type</td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Rasised At</td>
                    <td>Rasised By</td>
                    <td>Last Updated</td>
                    <td>Status</td>
                    <td>Owner</td>
                    <td>Team</td>
                    <td>Type</td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Rasised At</td>
                    <td>Rasised By</td>
                    <td>Last Updated</td>
                    <td>Status</td>
                    <td>Owner</td>
                    <td>Team</td>
                    <td>Type</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
