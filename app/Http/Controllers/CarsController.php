<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarFilterRequest;
use App\Http\Requests\StoreCarsRequest;
use App\Http\Requests\UpdateCarsRequest;
use App\Models\Cars;
use App\Services\CarsService;
use Illuminate\Http\Response;


class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }


    public function filterCars(CarFilterRequest $request, CarsService $carsService):object
    {

        return response()->json($carsService->getCars($request->validated()), 200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCarsRequest  $request
     * @return Response
     */
    public function store(StoreCarsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Cars  $cars
     * @return Response
     */
    public function show(Cars $cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cars  $cars
     * @return Response
     */
    public function edit(Cars $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCarsRequest  $request
     * @param  Cars  $cars
     * @return Response
     */
    public function update(UpdateCarsRequest $request, Cars $cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cars  $cars
     * @return Response
     */
    public function destroy(Cars $cars)
    {
        //
    }
}
