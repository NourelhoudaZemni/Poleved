@extends('baladesclient.layout')
@section('content')
<div class="card"> 
  <div class="card-body">
      
      <form action="{{ url('balade/' .$balades->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$balades->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="title" id="title" value="{{$balades->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$balades->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$balades->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop