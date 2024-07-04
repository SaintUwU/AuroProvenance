<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class UserCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('User/UserIndex',[
            'cars'=>CarResource::collection(Car::where('ownerId', auth()->id())->get())]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(component:'User/Create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->middleware('auth');
        $car = new Car();
        $car->ownerId = auth()->id();
        $car->name = $request->input('name');
        $car->CarId = $request->input('CarId');
        $car->save();
        
        return redirect()->route('user.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $CarId)
    {
        $car = Car::where('CarId', $CarId);
        $car->delete();
        return back();
    }
}
