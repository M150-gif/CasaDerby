@extends('store.dashbord.layouts.template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h2>Create Category</h2>
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>

    </div>
</div>
@endsection
