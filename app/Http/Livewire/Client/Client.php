<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Client as Model;

class Client extends Component
{
    public $clients = [];

    public function mount() {
        $this->clients = Model::all();
    }

    public function deleteEntity($id) {
        Model::whereId($id)->first()->delete();
        $this->clients = $this->clients->filter(function($item) use ($id) {
            return $item->id != $id;
        });
    }

    public function render()
    {
        return view('livewire.client.client');
    }
}
