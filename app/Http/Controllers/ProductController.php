<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return $product;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // $request->validate([
        //     'name'  =>  'required|unique:products',
        //     'color' =>  'required|regex:^#(?:[0-9a-fA-F]{3}){1,2}$^',
        //     'price' =>  'required|numeric'
        // ]);
        $product = new Product;
        $product->name = $request->name;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->save();
        return true;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        // $request->validate([
        //     'name'  =>  'required|unique:products',
        //     'color' =>  'required|regex:^#(?:[0-9a-fA-F]{3}){1,2}$^',
        //     'price' =>  'required|numeric'
        // ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->save();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
