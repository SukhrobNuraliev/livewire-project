<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    public $text = 'Data Binding';

    public function render()
    {
        return view('livewire.data-binding');
    }
}
