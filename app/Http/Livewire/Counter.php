<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $likes = 10;
    public $dislikes = 10;

    public function like()
    {
        $this->likes++;
    }

    public function dislike()
    {
        $this->dislikes++;
    }

    public function resetCounter()
    {
        $this->likes = 0;
        $this->dislikes = 0;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
