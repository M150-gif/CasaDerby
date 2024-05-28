@extends('store.dashbord.layouts.template')

@section('content')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    @if (session('success'))
    <div class="alert alert-success my-2">{{ session('success') }}</div>
    @endif
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Products</h1>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            
                <div class="col-auto">
                    <a class="btn app-btn-secondary" href="{{ route('products.create') }}">
                        Ajouter Porduct
                    </a>

                </div>
            </div><!--//row-->

        </div><!--//table-utilities-->
    </div><!--//col-auto-->
    @if (Session::get('success_message'))
    <div class="alert alert-success">{{ Session::get('success_message') }}</div>
    @endif
</div><!--//row-->


<div class="tab-content" id="Products-table-tab-content">
    <div class="tab-pane fade show active" id="Products-all" role="tabpanel" aria-labelledby="Products-all-tab">
        <div class="app-card app-card-Products-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">#</th>
                                <th class="cell">Nom</th>
                                <th class="cell">quantite</th>
                                <th class="cell">prix</th>
                                <th class="cell">description</th>
                                <th class="cell">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($Products as $Product)
                            <tr>
                                <td class="cell">{{ $Product->id }}</td>
                                <td class="cell">{{ $Product->nom }}</td>
                                <td class="cell">{{ $Product->quantite }}</td>
                                <td class="cell">{{ $Product->prix }}</td>
                                <td class="cell">{{ $Product->description }}</td>
                                <td class="cell">
                                        
                                        <form method="GET" action="{{ route('products.edit', $Product->id) }}">
                                        @csrf  
                                        <button type="submit" class="btn-sm app-btn-secondary" style="margin-right: 5px; border-radius: 0;">Editer</button>
                                        </form>
                                        <form method="POST" action="{{ route('products.destroy', $Product->id) }}" onsubmit="return confirm('Are you sure you want to delete this Product?')">
                                        @csrf   
                                        @method('DELETE') 
                                        <button type="submit" class="btn-sm app-btn-secondary" style="margin-right: 5px; border-radius: 0;">Retirer</button>
                                        </form>
                                        <form method="GET" action="{{ route('products.show', $Product->id) }}">
                                        @csrf   
                                        <button type="submit" class="btn-sm app-btn-secondary" style="margin-right: 5px; border-radius: 0;">Details</button>
                                        </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="cell" colspan="5">Aucun Product ajouté</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div><!--//table-responsive-->
            </div><!--//app-card-body-->
        </div><!--//app-card-->

        <nav class="app-pagination">

        </nav>
    </div><!--//tab-pane-->
</div><!--//tab-content-->
@endsection