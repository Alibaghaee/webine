<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCreateRequest;
use App\Http\Requests\Admin\ProductUpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('main.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('main.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductCreateRequest $request)
    {
        Product::create($request->validated());

        return redirect()->route('admin.product.index')
            ->with('message', 'Product has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return  \Illuminate\Contracts\View\View
     */
    public function show(Product $product)
    {
        return view('main.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return  \Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        return view('main.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductUpdateRequest $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('admin.product.index')
            ->with('message', 'Product has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index')
            ->with('message', 'Product has been destroyed.');

    }
}
