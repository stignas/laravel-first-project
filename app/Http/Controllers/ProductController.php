<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all()->toArray();
        return view('product.index',
            ['products' => $products]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->name = $request->toArray()['name'];
        $product->description = $request->toArray()['description'];
        $product->save();
        return $this->show($product['id']);
    }

    public function show(int $id)
    {
        $product = Product::findOrFail($id)->toArray();
        return view('product.show-product',
            ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     * TODO: create product update form page
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id)->toArray();
        return view('product.update-product',
            ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     * TODO: create product update endpoint
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->toArray()['name'];
        $product->description = $request->toArray()['description'];
        $product->save();
        $message = 'Product updated';
        return view('product.show-product',
            ['product' => $product, 'message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     * TODO: create product delete endpoint
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return $this->index();
    }
}
