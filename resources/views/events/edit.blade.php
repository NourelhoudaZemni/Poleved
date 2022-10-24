@extends('events.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Student</div>
        <div class="card-body">

            <form action="{{ url('event/' .$event->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$event->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$event->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="adress" id="adress" value="{{$event->adress}}" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" value="{{$event->mobile}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
