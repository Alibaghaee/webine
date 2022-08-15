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


    public function setProductIndex()
    {
        $this->prudoctsCon = true;

    }

    public function render()
    {
        $products = null;
        if ($this->prudoctsCon) {
            $products = Product::orderBy('updated_at')
                ->paginate();
        }

        return view('livewire.admin.dashboard', compact('products'));
    }
}
