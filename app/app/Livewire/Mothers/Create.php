<?php

namespace App\Livewire\Mothers;

use App\Models\Mother;
use Livewire\Component;

class Create extends Component
{
    public $name, $nik, $birth_date, $address, $phone;

    protected $rules = [
        'name' => 'required|string|max:255',
        'nik' => 'required|digits:16|unique:mothers,nik',
        'birth_date' => 'required|date',
        'address' => 'required|string',
        'phone' => 'nullable|string|max:20',
    ];

    public function store()
    {
        $validated = $this->validate();

        Mother::create($validated);

        session()->flash('success', 'Data ibu berhasil ditambahkan.');

        return redirect()->route('mothers.index');
    }

    public function render()
    {
        return view('livewire.mothers.create');
    }
}
