@extends('store.dashbord.layouts.template')

@section('content')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Clients</h1>
        </div>
        <div class="col-auto">
            
        </div><!--//col-auto-->
        @if (Session::get('success_message'))
            <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        @endif
    </div><!--//row-->


    <div class="tab-content" id="clients-table-tab-content">
        <div class="tab-pane fade show active" id="clients-all" role="tabpanel" aria-labelledby="clients-all-tab">
            <div class="app-card app-card-clients-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                            <tr>
                                <th class="cell">#</th>
                                <th class="cell">Nom</th>
                                <th class="cell">Prenom</th>
                                <th class="cell">Email</th>
                                <th class="cell">Adresse</th>
                                <th class="cell"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($clients as $client)
                                <tr>
                                    <td class="cell">{{ $client->id }}</td>
                                    <td class="cell">{{ $client->nom }}</td>
                                    <td class="cell">{{ $client->prenom }}</td>
                                    <td class="cell">{{ $client->email }}</td>
                                    <td class="cell">{{ $client->adresse }}</td>
                                    <td class="cell">


                                        <form method="POST" action="{{ route('clients.destroy', $client->id) }}" onsubmit="return confirm('Are you sure you want to delete this client?')">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-warning" href="{{ route('clients.edit', $client->id) }}">Editer</a>
                                            <button type="submit" class="btn btn-danger" style="margin-right: 5px; border-radius: 0;">Retirer</button>
                                            <a class="btn btn-info" href="{{ route('clients.show', $client->id) }}" style="border-radius: 0;">Détails</a>
                                        </form>


                                         
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="cell" colspan="5">Aucun client ajouté</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->
            </div><!--//app-card-->

            <nav class="app-pagination">
                <!-- Pagination links here -->
            </nav>
        </div><!--//tab-pane-->
    </div><!--//tab-content-->
@endsection
