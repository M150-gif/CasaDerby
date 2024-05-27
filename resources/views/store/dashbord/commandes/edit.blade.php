@extends('store.dashbord.layouts.template')

@section('content')
<h1 class="app-page-title">Porduct edit</h1>
<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-4">
        <h3 class="section-title">Edition</h3>
        <div class="section-intro">Editer un product</div>
    </div>
    <div class="col-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <form class="settings-form" method="POST" action="{{ route('products.update', $product->id) }}">
                    @csrf
                    @method('PATCH')  
                    <div class="mb-3">
                        <label for="nom" class="form-label">nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $product->nom }}" placeholder="Entrer le Nom" required>
                        @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">prix</label>
                        <input type="number" class="form-control" id="prenom" name="prix" value="{{ $product->prix }}" placeholder="Entrer le Prenom" required>
                        @error('prix')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <input type="text" class="form-control" id="description" name="description " value="{{ $product->description }}" placeholder="Entrer l'Email" required>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">quantite</label>
                        <input type="number" class="form-control" id="adresse" name="quantite" value="{{ $product->quantite }}" placeholder="Entrer l'Adresse" required>
                        @error('quantite')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn app-btn-primary">Mettre à jour</button>
                </form>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->
@endsection
