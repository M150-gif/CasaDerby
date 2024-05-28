@extends('store.dashbord.layouts.template')

@section('content')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Product Details</h1>
        </div>
    </div>

    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                    <tbody>
                        <tr>
                            <th class="cell">id</th>
                            <td class="cell">{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <th class="cell">nom</th>
                            <td class="cell">{{ $product->nom }}</td>
                        </tr>
                        <tr>
                            <th class="cell">quantite</th>
                            <td class="cell">{{ $product->quantite }}</td>
                        </tr>
                        <tr>
                            <th class="cell">prix</th>
                            <td class="cell">{{ $product->prix }}</td>
                        </tr>
                        <tr>
                            <th class="cell">description</th>
                            <td class="cell">{{ $product->description }}</td>
                        </tr>
                        <!-- Add more fields as needed -->
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 rounded m-2">
                    @if ($product->image_path)
                        <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top" alt="{{ $product->nom }}">
                    @else
                        <p>No image available for this category.</p>
                    @endif
                </div>
            </div><!--//table-responsive-->
        </div><!--//app-card-body-->
    </div><!--//app-card-->
@endsection
