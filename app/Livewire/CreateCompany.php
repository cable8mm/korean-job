<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateCompany extends Component
{
    public $name;

    public function mount($name = null)
    {
        $this->name = $name;
    }

    public function addCompany()
    {
        Auth::user()->companies()->create([
            $this->only(['name']),
        ]);

        $this->reset();
    }

    public function render()
    {
        $companies = Auth::user()->companies()->pluck('name', 'id') ?? [1 => 'No User'];

        return view('livewire.create-company', [
            'name' => $this->name,
            'companies' => $companies,
        ]);
    }
}
