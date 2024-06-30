<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Users/UsersIndex',
        ['users'=> UserResource::collection(User::all())]);
    }
}
