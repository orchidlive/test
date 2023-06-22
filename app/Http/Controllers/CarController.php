<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;
use App\Models\Owner;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Owner $owner)
    {
        return CarResource::collection($owner->cars);
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
    public function store(StoreCarRequest $request, Owner $owner)
    {
        $owner->cars()->create($request->safe()->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Owner $owner, Car $car)
    {
        $owner->cars()->findOrFail($car->id)->update($request->safe()->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner, Car $car)
    {
        $owner->cars()->findOrFail($car->id)->delete();
    }
}
