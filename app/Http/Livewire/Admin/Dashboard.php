<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;


    public $prudoctsCon = false;
    public $createPrudoctCon = false;


    public $title;
    public $description;
    public $result = false;


    public $productId;
    public $editProduct;
    public $editPrudoctCon;


    public function setProductIndex()
    {
        $this->createPrudoctCon = false;
        $this->editPrudoctCon = false;
        $this->result = false;
        $this->prudoctsCon = true;
    }

    public function setProductCreate()
    {
        $this->prudoctsCon = false;
        $this->editPrudoctCon = false;
        $this->result = false;
        $this->createPrudoctCon = true;

    }



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

        $this->title = '';
        $this->description = '';
    }


    public function setProductEdit($id)
    {

        $this->productId = $id;
        $this->editProduct = Product::find($this->productId);

        $this->prudoctsCon = false;
        $this->createPrudoctCon = false;
        $this->result = false;

        $this->editPrudoctCon = true;
    }

    public function updateProductForm()
    {


        try {
            $this->validate();

            $this->editProduct->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);

            $this->result = true;


        } catch (\Exception $e) {
            $this->result = false;
        }

        $this->title = '';
        $this->description = '';
    }


    public function render()
    {
        $products = null;
        if ($this->prudoctsCon) {
            $products = Product::orderBy('updated_at')
                ->paginate(3);
        }

        return view('livewire.admin.dashboard', compact('products'));
    }
}
