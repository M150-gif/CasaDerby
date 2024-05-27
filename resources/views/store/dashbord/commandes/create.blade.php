@extends('store.dashbord.layouts.template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h2>Add new product</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Enter category name">
                @error('nom')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
            </div>
            <div class="form-group">
                <label for="prix">prix:</label>
                <input type="number" name="prix" id="nom" class="form-control" placeholder="Enter category name">
                @error('prix')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
            </div>
            <div class="form-group">
                <label for="quantite">quantite:</label>
                <input type="number" name="quantite" id="nom" class="form-control" placeholder="Enter category name">
                @error('quantite')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
            </div>
            <div class="form-group">
                <label for="description">description:</label>
                <input type="text" name="description" id="nom" class="form-control" placeholder="Enter category name">
                @error('description')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
            </div>
            <div class="mb-3">
      <label for="dSelect" class="form-label">Disabled select menu</label>
      <select id="dSelect" class="form-select" name="categorie_id">
       @forelse ($categories as $categorie)
       <option vlaue="{{$categorie->id}}">{{$categorie->id}}</option>
        @empty
        <option>no category existe</option>
        @endforelse
      </select>
      @error('categorie_id')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
    </div>
            <button type="submit" class="btn btn-primary mt-2">Create</button>
        </form>
    </div>
</div>
@endsection
