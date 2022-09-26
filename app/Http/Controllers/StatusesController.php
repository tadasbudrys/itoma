<?php

namespace App\Http\Controllers;

use App\Models\Statuses;
use App\Http\Requests\StoreStatusesRequest;
use App\Http\Requests\UpdateStatusesRequest;

class StatusesController extends Controller
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
     * @param  \App\Http\Requests\StoreStatusesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statuses  $statuses
     * @return \Illuminate\Http\Response
     */
    public function show(Statuses $statuses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statuses  $statuses
     * @return \Illuminate\Http\Response
     */
    public function edit(Statuses $statuses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusesRequest  $request
     * @param  \App\Models\Statuses  $statuses
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusesRequest $request, Statuses $statuses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statuses  $statuses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statuses $statuses)
    {
        //
    }
}
