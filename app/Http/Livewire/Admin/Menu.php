<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Menu extends Component
{
    public $prudocts = false;

    public function render()
    {
        return view('livewire.admin.menu');
    }

    public function setProductIndex()
    {
        $products = true;
    }
}
