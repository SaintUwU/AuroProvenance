<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\CarResource;
use App\Models\Car;

class CarController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Cars/CarsIndex',[
            'cars'=>CarResource::collection(Car::all())]);
    }
}
