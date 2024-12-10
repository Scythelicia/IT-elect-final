<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Index method to display products and calculate total price
    public function index()
    {
        // Retrieve all products
        $products = Product::all();
        
        // Calculate the total price of all products
        $totalPrice = $products->sum('price');
        
        // Pass products and totalPrice to the view
        return view('products.index', compact('products', 'totalPrice'));
    }

    // Show the form to create a new product
    public function create()
    {
        return view('products.create');
    }

    // Store the newly created product
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        // Create a new product using the validated data
        Product::create($request->all());

        // Redirect to product list
        return redirect()->route('products.index');
    }

    // Show details of a single product
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Show the form to edit an existing product
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update the existing product
    public function update(Request $request, Product $product)
    {
        // Validate incoming data
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        // Update the product with the validated data
        $product->update($request->all());

        // Redirect to product list
        return redirect()->route('products.index');
    }

    // Delete a product
    public function destroy(Product $product)
    {
        // Delete the product
        $product->delete();
        
        // Redirect to product list
        return redirect()->route('products.index');
    }
}
