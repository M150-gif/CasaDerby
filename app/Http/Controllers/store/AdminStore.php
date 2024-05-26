<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminStore extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('store.dashbord.Client.index', compact('clients'));
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
            'email' => 'required|string|email|max:255|unique:clients,email,' . $client->id,
            #'password' => 'nullable|string|min:8|confirmed',
            'adresse' => 'required|string|max:255',
        ]);

        $client->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            #'password' => $request->password ? Hash::make($request->password) : $client->password,
            'adresse' => $request->adresse,
        ]);

        return redirect()->route('clients.index')
                         ->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('store.pagesclients.index')->with('success_message', 'Client deleted successfully');
    }
}
