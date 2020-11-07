<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('siv.client.index', compact('clients'));
    }

    public function create() {
        return view('siv.client.create');
    }

    public function store(Request $request)
    {
        dd($request->all() + ['user_id' => \Tenant::getTenant()->id]);;
        Client::create($request->all() + ['user_id' => \Tenant::getTenant()->id]);
        session()->flash('message', 'Cliente criado com sucesso');
        return redirect()->route('web.clients.index');
    }

    public function show(Client $client)
    {
        return view('siv.client.show', compact('client'));
    }

    public function edit(Client $client) {
        return view('siv.client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        session()->flash('message', 'Cliente atualizado com sucesso');
        return redirect()->route('web.clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        session()->flash('message', 'Cliente removido com sucesso');
        return redirect()->route('web.clients.index');
    }
}
