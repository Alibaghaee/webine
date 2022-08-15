<?php

namespace App\Http\Livewire\Admin;


use App\Models\Product;
use LivewireUI\Modal\ModalComponent;

class CategoryModal extends ModalComponent
{

    public $product;
    public $title;

    protected $rules = [
        'title' => 'required|text|max:255',
    ];
    public $categories = null;

    public function addCategory()
    {
        try {
            $this->validate();
            Product::find($this->product['id'])->categories()
                ->create(['title' => $this->title]);
        } catch (\Exception $exception) {
            //
        }

    }

    public function render()
    {
        $this->categories = Product::find($this->product['id'])->categories();
        return view('livewire.admin.category-modal');
    }
}
