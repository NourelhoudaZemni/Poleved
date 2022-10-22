@extends('velo.layout')

@section('content')

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>

    @endif

    <div class="card">
        <div class="card-header">Add </div>
        <div class="card-body">
            <form method="post" action="{{ route('velo.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Marque</label>
                    <div class="col-sm-10">
                        <input type="text" name="marque" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Etat</label>
                    <div class="col-sm-10">
                        <input type="text" name="etat" class="form-control" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Prix</label>
                    <div class="col-sm-10">
                        <input type="number" name="prix" class="form-control" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Type</label>
                    <select class="col-sm-3" name="type">
                        <option value="" selected=""> Ajouter une catégorie</option>
                        @foreach ($type as $type)
                            <option value="{{$type ->type_name}}"> {{$type -> type_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" />
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-outline-secondary" value="Add" />
                </div>
            </form>
        </div>
    </div>

@endsection('content')
