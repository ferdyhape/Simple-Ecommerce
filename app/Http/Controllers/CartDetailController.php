<?php

namespace App\Http\Controllers;

use App\Models\Cart_Detail;
use App\Http\Requests\StoreCart_DetailRequest;
use App\Http\Requests\UpdateCart_DetailRequest;

class CartDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCart_DetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCart_DetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart_Detail  $cart_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_Detail $cart_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart_Detail  $cart_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart_Detail $cart_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCart_DetailRequest  $request
     * @param  \App\Models\Cart_Detail  $cart_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCart_DetailRequest $request, Cart_Detail $cart_Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart_Detail  $cart_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart_Detail $cart_Detail)
    {
        //
    }
}
