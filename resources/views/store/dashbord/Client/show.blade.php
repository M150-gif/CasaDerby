@extends('store.pages.layouts.template')

@section('content')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Client Details</h1>
        </div>
    </div>

    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                    <tbody>
                        <tr>
                            <th class="cell">Nom</th>
                            <td class="cell">{{ $client->nom }}</td>
                        </tr>
                        <tr>
                            <th class="cell">Prenom</th>
                            <td class="cell">{{ $client->prenom }}</td>
                        </tr>
                        <tr>
                            <th class="cell">Email</th>
                            <td class="cell">{{ $client->email }}</td>
                        </tr>
                        <!-- Add more fields as needed -->
                    </tbody>
                </table>
            </div><!--//table-responsive-->
        </div><!--//app-card-body-->
    </div><!--//app-card-->
@endsection
