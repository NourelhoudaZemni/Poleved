@extends('type.layout')

@section('content')

    <div class="card">
        <div class="card-header">Edit</div>
        <div class="card-body">
            <form method="post" action="{{ route('type.update', $type->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Type</label>
                    <div class="col-sm-10">
                        <input type="text" name="type_name" class="form-control" value="{{ $type->type_name }}" />
                    </div>
                </div>



                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $type->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>


@endsection('content')
