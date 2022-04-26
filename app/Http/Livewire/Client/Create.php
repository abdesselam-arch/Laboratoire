<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class Create extends Component
{
    public Client $client;

    public function mount(Client $client)
    {
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.client.create');
    }

    public function submit()
    {
        $this->validate();

        $this->client->save();

        return redirect()->route('admin.clients.index');
    }

    protected function rules(): array
    {
        return [
            'client.name' => [
                'string',
                'required',
            ],
            'client.email' => [
                'email:rfc',
                'required',
                'unique:clients,email',
            ],
            'client.phone' => [
                'string',
                'nullable',
            ],
        ];
    }
}