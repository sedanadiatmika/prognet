<?php

namespace App\Http\Controllers;

use App\detailcategory;
use Illuminate\Http\Request;

class DetailcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_detailcategory = detailcategory::get();
        return view('category/detail_category',compact('all_detcategory'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detailcategory  $detailcategory
     * @return \Illuminate\Http\Response
     */
    public function show(detailcategory $detailcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detailcategory  $detailcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(detailcategory $detailcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detailcategory  $detailcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailcategory $detailcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detailcategory  $detailcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailcategory $detailcategory)
    {
        //
    }
}
