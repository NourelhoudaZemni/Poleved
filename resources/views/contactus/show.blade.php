@extends('contactus.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Event Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Full Name : {{ $contactus->full_name }}</h5>
                <p class="card-text">Email : {{ $contactus->email }}</p>
                <p class="card-text">Mobile : {{ $contactus->phone }}</p>
                <p class="card-text">Message : {{ $contactus->message }}</p>
            </div>
            </hr>
        </div>
        <a href="{{ url('/contactus/') }}" title="View Student">
            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Back</button>
        </a>
    </div>
@endsection
