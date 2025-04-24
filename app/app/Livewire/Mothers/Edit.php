<?php

namespace App\Livewire\Mothers;

use App\Models\Mother;
use Livewire\Component;

class Edit extends Component
{
    public $motherId;
    public $name, $nik, $birth_date, $address, $phone;

    public function mount($id)
    {
        $mother = Mother::findOrFail($id);

        $this->motherId = $mother->id;
        $this->name = $mother->name;
        $this->nik = $mother->nik;
        $this->birth_date = $mother->birth_date;
        $this->address = $mother->address;
        $this->phone = $mother->phone;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'nik' => 'required|digits:16|unique:mothers,nik,' . $this->motherId,
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'phone' => 'nullable|string|max:20',
        ]);

        $mother = Mother::findOrFail($this->motherId);

        $mother->update([
            'name' => $this->name,
            'nik' => $this->nik,
            'birth_date' => $this->birth_date,
            'address' => $this->address,
            'phone' => $this->phone,
        ]);

        session()->flash('success', 'Data ibu berhasil diperbarui.');

        return redirect()->route('mothers.index');
    }

    public function render()
    {
        return view('livewire.mothers.edit');
    }
}
