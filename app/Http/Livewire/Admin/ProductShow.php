<?php

namespace App\Http\Livewire\Admin;

use LivewireUI\Modal\ModalComponent;


class ProductShow extends ModalComponent
{
    public $product;

    public function render()
    {
        return view('livewire.admin.product-show');
    }
}
