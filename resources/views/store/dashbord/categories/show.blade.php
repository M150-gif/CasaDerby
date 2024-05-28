@extends('store.dashbord.layouts.template')

@section('content')
<div class="container">
    <h1 class="app-page-title">Category Details: {{$categorie->nom}}</h1>
    <div class="card">
        <div class="card-header">
            Category Details {{$var}}
        </div>
        <div class="card-body">
            @if($categorie)
            <p><strong>ID:</strong> {{ $categorie->id }}</p>
            <p><strong>Nom:</strong> {{ $categorie->image_path }}</p>
            <div class="row">
                <div class="col-lg-4 rounded">
                    @if ($categorie->image_path)
                        <img src="{{ asset('storage/' . $categorie->image_path) }}" class="card-img-top" alt="{{ $categorie->nom }}">
                    @else
                        <p>No image available for this category.</p>
                    @endif
                </div>
            </div>
            @endif
            <a class="btn btn-secondary mt-2" href="{{ route('categories.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection
