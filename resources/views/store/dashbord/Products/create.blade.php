@extends('store.dashbord.layouts.template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h2>Add new product</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Enter product name">
                @error('nom')
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="number" name="prix" id="prix" class="form-control" placeholder="Enter product price">
                @error('prix')
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="quantite">Quantité:</label>
                <input type="number" name="quantite" id="quantite" class="form-control" placeholder="Enter product quantity">
                @error('quantite')
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description">
                @error('description')
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="dSelect" class="form-label">Categories</label>
                <select id="dSelect" class="form-select" name="categorie_id">
                    @forelse ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                    @empty
                        <option>No category exists</option>
                    @endforelse
                </select>
                @error('categorie_id')
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @error('image')
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Create</button>
        </form>
    </div>
</div>
@endsection
