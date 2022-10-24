@extends('events.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Event Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Name : {{ $event->name }}</h5>
                <p class="card-text">Address : {{ $event->address }}</p>
                <p class="card-text">Mobile : {{ $event->mobile }}</p>
            </div>
            </hr>
        </div>
        <a href="{{ url('/event/') }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Back</button></a>
    </div>
@endsection
