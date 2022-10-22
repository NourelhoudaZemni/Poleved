@extends('velo.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Details</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('velo.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Marque</b></label>
                <div class="col-sm-10">
                    {{ $velo->marque }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Etat</b></label>
                <div class="col-sm-10">
                    {{ $velo->etat }}
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Prix</b></label>
                <div class="col-sm-10">
                    {{ $velo->prix }}
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Image</b></label>
                <div class="col-sm-10">
                    <img src="{{ asset('images/' .  $velo->image) }}" width="200" class="img-thumbnail" />
                </div>
            </div>
        </div>
    </div>

@endsection('content')
