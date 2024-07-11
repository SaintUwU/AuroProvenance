<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LockScreenController extends Controller
{
    public function lockScreen(){
        return Inertia::render('Auth/LockScreen');
    }
}
