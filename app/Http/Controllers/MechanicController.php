<?php
namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Inertia\Inertia;
use Inertia\response;

class MechanicController extends Controller{

    public function index(): Response
    {
        return Inertia::render('Mechanic/MechanicIndex');
    }
}