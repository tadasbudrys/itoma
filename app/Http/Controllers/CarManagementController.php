<?php

namespace App\Http\Controllers;

use App\Models\CarManagement;
use App\Http\Requests\StoreCarManagementRequest;
use App\Http\Requests\UpdateCarManagementRequest;

class CarManagementController extends Controller
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
     * @param  \App\Http\Requests\StoreCarManagementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarManagementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarManagement  $carManagement
     * @return \Illuminate\Http\Response
     */
    public function show(CarManagement $carManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarManagement  $carManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(CarManagement $carManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarManagementRequest  $request
     * @param  \App\Models\CarManagement  $carManagement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarManagementRequest $request, CarManagement $carManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarManagement  $carManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarManagement $carManagement)
    {
        //
    }
}
