@extends('contactus.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New contact</div>
        <div class="card-body">
            <form action="{{ url('contactus') }}" method="post">
                {!! csrf_field() !!}
                <label>Full Name</label></br>
                <input type="text" name="full_name" id="full_name" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="phone" id="phone" class="form-control"></br>
                <label>Message</label></br>
                <input type="text" name="message" id="message" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
