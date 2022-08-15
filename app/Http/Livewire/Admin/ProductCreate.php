<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{

    public function render()
    {
        return view('livewire.admin.product-create');
    }
}
