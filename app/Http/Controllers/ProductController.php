<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Enums\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Product.index', [
            'products' => Product::paginate(10),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Product.form', [
            'product' => (new Product()),
            'categories' => Category::getValues(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        $validated = $request->validate([



            'name' => 'required',
            'description' => 'required', 
            'price' => 'required',
            'category' => 'required'

        ]);
        
        
        Product::create($validated);
        //dd ($validated);
        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('Admin.Product.form', [
            'product' => $product,
            'categories' => Category::cases(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required', 
            'price' => 'required',
            'category' => 'required'
        ]);

        $product->update($validated);
        return redirect()->route('product.index')->with('success', 'product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'product deleted successfully!');
    }
}
