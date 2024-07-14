<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AdminController extends Controller
{
    //
    public function index(): Response
    {
        $userCount = User::count();
        $carCount = Car::count();
        return Inertia::render('Admin/AdminIndex',[
            'userCount' => $userCount,
            'carCount' => $carCount
        ] );
    }
}
