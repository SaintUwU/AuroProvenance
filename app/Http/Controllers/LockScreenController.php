<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class LockScreenController extends Controller
{
    public function unlock(Request $request){
        if (Hash::check($request->input('password'), auth()->user()->password)) {
            // If the password is correct, return a success response
            return response()->json(['success' => true]);
        } else {
            // If the password is incorrect, return an error response
            return response()->json(['error' => 'Invalid password'], 401);
        }
    }
}
