@extends('store.dashbord.layouts.template')

@section('content')
<div class="container">
    <h1 class="app-page-title">Category Details</h1>
    <div class="card">
        <div class="card-header">
            Category Details
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Nom:</strong> {{ $category->nom }}</p>
            <a class="btn btn-secondary" href="{{ route('categories.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection
