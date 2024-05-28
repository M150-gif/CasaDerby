@extends('store.dashbord.layouts.template')

@section('content')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    @if (session('success'))
    <div class="alert alert-success my-2">{{ session('success') }}</div>
    @endif
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Commandes</h1>
    </div>
    <div class="col-auto">

    </div><!--//col-auto-->
    @if (Session::get('success_message'))
    <div class="alert alert-success">{{ Session::get('success_message') }}</div>
    @endif
</div><!--//row-->

<div class="tab-content" id="Commandes-table-tab-content">
    <div class="tab-pane fade show active" id="Commandes-all" role="tabpanel" aria-labelledby="Commandes-all-tab">
        <div class="app-card app-card-Commandes-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">#</th>
                                <th class="cell">Nom du Client</th>
                                <th class="cell">Prix Total</th>
                                <th class="cell">Date</th>
                                <th class="cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($commandes as $commande)
                            <tr>
                                <td class="cell">{{ $commande->id }}</td>
                                <td class="cell">{{ $commande->client->name }}</td>
                                <td class="cell">{{ $commande->price_totale }}</td>
                                <td class="cell">{{ $commande->created_at->format('d/m/Y') }}</td>
                                <td class="cell">
                                    <form method="GET" action="{{ route('commandes.edit', $commande->id) }}">
                                        @csrf  
                                        <button type="submit" class="btn-sm app-btn-secondary" style="margin-right: 5px; border-radius: 0;">Editer</button>
                                    </form>
                                    <form method="POST" action="{{ route('commandes.destroy', $commande->id) }}" onsubmit="return confirm('Are you sure you want to delete this Commande?')">
                                        @csrf   
                                        @method('DELETE') 
                                        <button type="submit" class="btn-sm app-btn-secondary" style="margin-right: 5px; border-radius: 0;">Retirer</button>
                                    </form>
                                    <form method="GET" action="{{ route('commandes.show', $commande->id) }}">
                                        @csrf   
                                        <button type="submit" class="btn-sm app-btn-secondary" style="margin-right: 5px; border-radius: 0;">Details</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="cell" colspan="5">Aucune commande ajoutée</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div><!--//table-responsive-->
            </div><!--//app-card-body-->
        </div><!--//app-card-->

        <nav class="app-pagination">
            {{ $commandes->links() }}
        </nav>
    </div><!--//tab-pane-->
</div><!--//tab-content-->
@endsection
