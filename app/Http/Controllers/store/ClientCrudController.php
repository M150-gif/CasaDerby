<?php
namespace App\Http\Controllers\store;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientCrudController extends Controller
{
    public function dashboard()
    {
        return view('store.dashbord.layouts.template');
    }

    public function index()
    {
        $clients = Client::all();
        return view('store.dashbord.Client.index', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'adresse' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success_message', 'Client created successfully.');
    }

    public function show(Client $client)
    {
        return view('store.dashbord.Client.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('store.dashbord.Client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients,email,'.$client->id,
            'adresse' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index')->with('success_message', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success_message', 'Client deleted successfully.');
    }
}
