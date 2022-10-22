@extends('.9aleeeeb')

@section('content')

    <div class="card">
        <div class="card-header">Edit Student</div>
        <div class="card-body">
            <form method="post" action="{{ route('velo.update', $velo->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Marque</label>
                    <div class="col-sm-10">
                        <input type="text" name="marque" class="form-control" value="{{ $velo->marque }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Etat</label>
                    <div class="col-sm-10">
                        <input type="text" name="etat" class="form-control" value="{{ $velo->etat }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Prix</label>
                    <div class="col-sm-10">
                        <input type="number" name="prix" class="form-control" value="{{ $velo->prix }}" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="student_image" />
                        <br />
                        <img src="{{ asset('images/' . $velo->image) }}" width="100" class="img-thumbnail" />
                        <input type="hidden" name="hidden_image" value="{{ $velo->image }}" />
                    </div>
                </div>
                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $velo->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>


@endsection('content')
