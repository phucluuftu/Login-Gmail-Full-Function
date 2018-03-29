@extends ('layouts.app')
@section ('content')
    <a href="{{ route('tickets.index') }}">Go Back</a>
    {!! Form::model($tickets, ['method' => 'PATCH', 'route' => ['tickets.update', $tickets->id]]) !!}
    Title:<br>
    {!! Form::text('title', null, array()) !!}<br>
    {!! Form::close() !!}
@endsection