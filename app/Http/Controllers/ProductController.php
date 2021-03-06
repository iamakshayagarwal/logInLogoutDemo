<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products=Product::paginate(10);
        return ProductResource::collection($Products);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Product = new Product;
        $Product->name=$request->name;
        $Product->description=$request->description;
        $Product->image=$request->image;
        $Product->price=$request->price;
        $Product->stock=$request->stock;
        $Product->discount=$request->discount;
        $Product->sku_id=$request->sku_id;
        $Product->model=$request->model;
        $Product->tags=$request->tags;
        $Product->subcat_id=$request->subcat_id;

        if($Product->save())
        {
            return new ProductResource($Product);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product = Product::findOrFail($id);
        return new ProductResource($Product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Product =Product::findOrFail($id);
        $Product->name=$request->name;
        $Product->description=$request->description;
        $Product->image=$request->image;
        $Product->price=$request->price;
        $Product->stock=$request->stock;
        $Product->discount=$request->discount;
        $Product->sku_id=$request->sku_id;
        $Product->model=$request->model;
        $Product->tags=$request->tags;
        $Product->subcat_id=$request->subcat_id;

        if($Product->save())
        {
            return new ProductResource($Product);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product =Product::findOrFail($id);
        if($Product->delete())
        {
            return new ProductResource($Product);
        }
    }
}
