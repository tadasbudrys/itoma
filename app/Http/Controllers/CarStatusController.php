<?php

namespace App\Http\Controllers;

use App\Models\CarStatus;
use App\Http\Requests\StoreCarStatusRequest;
use App\Http\Requests\UpdateCarStatusRequest;

class CarStatusController extends Controller
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
     * @param  \App\Http\Requests\StoreCarStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarStatus  $carStatus
     * @return \Illuminate\Http\Response
     */
    public function show(CarStatus $carStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarStatus  $carStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(CarStatus $carStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarStatusRequest  $request
     * @param  \App\Models\CarStatus  $carStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarStatusRequest $request, CarStatus $carStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarStatus  $carStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarStatus $carStatus)
    {
        //
    }
}
