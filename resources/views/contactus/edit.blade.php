@extends('contactus.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit</div>
        <div class="card-body">

            <form action="{{ url('contactus/' .$contactus->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$contactus->id}}" id="id"/>
                <label>Full Name</label></br>
                <input type="text" name="full_name" id="full_name" value="{{$contactus->full_name}}"
                       class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{$contactus->email}}" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="phone" id="phone" value="{{$contactus->phone}}" class="form-control"></br>
                <label>Message</label></br>
                <input type="text" name="message" id="message" value="{{$contactus->message}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
