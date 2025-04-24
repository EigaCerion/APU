<?php

namespace App\Livewire\Mothers;

use App\Models\Mother;
use Livewire\Component;

class Index extends Component
{
    public $search = '';

    public function delete($id)
    {
        Mother::destroy($id);
    }

    public function render()
    {
        $mothers = Mother::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.mothers.index', compact('mothers'));
    }
}
