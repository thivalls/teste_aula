<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Client;

class ClientForm extends Component
{
    public Client $client;

    protected $rules = [
        'client.name' => 'required|string',
        'client.cpf' => 'string',
        'client.cnpj' => 'string',
        'client.city' => 'string',
        'client.state' => 'string',
        'client.street' => 'string',
        'client.number' => 'string',
        'client.zipcode' => 'string',
        'client.phone1' => 'string',
        'client.phone2' => 'string',
        'client.email' => 'string|email|max:255',
        'client.notes' => 'string',
    ];

    protected $messages = [
        'client.*.required' => 'Este campo é obrigatório',
    ];

    public function mount(Client $client) {
        if($client) {
            $this->client = $client;
        }else {
            $this->client = new Client();
        }
    }

    public function save() {
        $this->validate();
        $this->client->save();
        return redirect()->route('web.clients.index');
    }

    public function render()
    {
        return view('livewire.client.client-form');
    }
}
