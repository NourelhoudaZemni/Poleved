@extends('components.layout')

@section('content')

    <div class="card">
        <div class="card-header">Edit Student</div>
        <div class="card-body">
            <form method="post" action="{{ route('location.update', $location->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">user</label>
                    <div class="col-sm-10">
                        <input type="text" name="marque" class="form-control" value="{{ $location->user }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">velo</label>
                    <div class="col-sm-10">
                        <input type="text" name="etat" class="form-control" value="{{ $location->velo }}"/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">duree</label>
                    <div class="col-sm-10">
                        <input type="number" name="prix" class="form-control" value="{{ $location->duree }}"/>
                    </div>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $location->id }}"/>
                    <input type="submit" class="btn btn-primary" value="Edit"/>
                </div>
            </form>
        </div>
    </div>

@endsection('content')
