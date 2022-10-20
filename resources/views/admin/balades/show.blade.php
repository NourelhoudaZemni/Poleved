 
@section('content')
<div class="card">
  <div class="card-header">balades Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $balades->name }}</h5>
        <p class="card-text">Address : {{ $balades->address }}</p>
        <p class="card-text">Mobile : {{ $balades->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>