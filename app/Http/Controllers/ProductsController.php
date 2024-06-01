<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Product();
        $model->product_category_id = $request->product_category_id;
        $model->name = $request->name;
        $model->price = $request->price;
        $model->save();
        return response()->json([
            "status" => "success",
            "data" => $model
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ProductResource::collection([Product::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Product::find($id);
        $model->product_category_id = $request->product_category_id;
        $model->name = $request->name;
        $model->price = $request->price;
        $model->save();
        return response()->json([
            "status" => "success",
            "data" => $model
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Product::find($id);
        $model->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
}
