@extends('store.dashbord.layouts.template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h2>Create Category</h2>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Enter category name">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
