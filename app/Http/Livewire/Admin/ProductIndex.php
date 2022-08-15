<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $products = Product::orderByDesc('updated_at')
            ->paginate(3);

        return view('livewire.admin.product-index',
            compact('products'));
    }
}
