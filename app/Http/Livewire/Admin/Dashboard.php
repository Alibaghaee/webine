<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $prudoctsCon = false;
    public $createPrudoctCon = false;


    public function setProductIndex()
    {
        $this->createPrudoctCon = false;
        $this->prudoctsCon = true;
    }

    public function setProductCreate()
    {
        $this->prudoctsCon = false;
        $this->createPrudoctCon = true;

    }

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

        $this->email = '';
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
