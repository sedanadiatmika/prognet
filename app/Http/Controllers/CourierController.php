<?php

namespace App\Http\Controllers;

use App\courier;
use DB;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_courier = courier::get();
        return view('courier/courier', compact('all_courier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courier/newcourier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courier = new courier();
        $courier->courier = $request->courier;
        $courier->save();
        return redirect('courier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courier = courier::where("id", $id)->first();
        return view('courier/showcourier', compact('courier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courier = courier::where("id", $id)->first();
        return view('courier/editcourier', compact('courier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $courier = courier::where("id",$id)->first();
        $courier->courier = $request->courier;
        $courier->save();
        return redirect('/courier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courier = courier::find($id);
        $courier->delete();
        return redirect('/courier');
    }
}
