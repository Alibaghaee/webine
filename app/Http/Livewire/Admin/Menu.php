<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Menu extends Component
{


    public function render()
    {

        return view('livewire.admin.menu');
    }
}
