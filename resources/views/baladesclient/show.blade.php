
@extends('baladesclient.layout')
@section('content')
<div class="card">
  <div class="card-header">balades Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $balades->title }}</h5>
        <p class="card-text">Description : {{ $balades->description }}</p>
        <p class="card-text">Prix : {{ $balades->price }}</p>
        <p class="card-text">Quantity : {{ $balades->quantity }}</p>
        <p class="card-text">Description : {{ $balades->description }}</p>
        <p class="card-text">Catégorie : {{ $balades->category }}</p>
        <p class="card-text">Nouveau prix : {{ $balades->discount_price }}</p>
  </div>
      
    </hr>
  
  </div>
</div>