<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCarRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MechanicCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Response
    {
        return Inertia::render('Mechanic/MechanicIndex',[
            'cars'=>CarResource::collection(Car::all())]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $CarId)
    {
        $car = Car::where('CarId',( $CarId))->first();

        return Inertia::render('Mechanic/Edit', [
            'car' => new CarResource($car)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, string $CarId)
    {
        $car = Car::where('CarId', $CarId);
        $car->update($request->validated());
        return to_route('mech.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
