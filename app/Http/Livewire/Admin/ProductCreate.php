<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{

    public $title;
    public $description;
    public $result = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:16000000',
    ];

    public function productForm()
    {


        try {
            $this->validate();

            Product::create([
                'title' => $this->title,
                'description' => $this->description,
            ]);

            $this->result = true;


        } catch (\Exception $e) {
            $this->result = false;
        }
        $this->reset(['description','title']);
        $this->title = '';
        $this->description = '';
    }
    public function render()
    {
        return view('livewire.admin.product-create');
    }
}
