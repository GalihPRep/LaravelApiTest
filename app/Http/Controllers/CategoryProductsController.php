<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryProductResource;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryProductResource::collection(CategoryProduct::all());
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
        $model = new CategoryProduct();
        $model->name = $request->name;
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
        return CategoryProductResource::collection([CategoryProduct::find($id)]);
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
        $model = CategoryProduct::find($id);
        $model->name = $request->name;
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
        $model = CategoryProduct::find($id);
        $model->delete();
        return response()->json([
            "status" => "success"
        ]);
    }
}
