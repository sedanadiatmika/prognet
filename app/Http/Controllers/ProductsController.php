<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\products;
use DB;

class ProductsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_products = products::get();
        return view('products/products',compact('all_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/newproducts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new products();
            $products->product_name = $request->product_name;
            $products->price = $request->price;
	        $products->description = $request->description;
            $products->product_rate = $request->product_rate;
            $products->stock = $request->stock;
            $products->weight = $request->weight;
	        $products->save();
	        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = products::where("id",$id)->first();
        return view('products/showproducts',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = products::where("id",$id)->first();
        return view('products/editproducts',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = products::where("id",$id)->first();
        $products->product_name = $request->product_name;
        $products->price = $request->price;
	    $products->description = $request->description;
        $products->product_rate = $request->product_rate;
        $products->stock = $request->stock;
        $products->weight = $request->weight;
		$products->save();
		return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products, $id)
    {
        $products= products::find($id);
        $products->delete();
        return redirect('/products');
    }
}
