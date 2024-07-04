<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Users/UsersIndex',
        ['users'=> UserResource::collection(User::all())]);
    }
    
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(component:'Admin/Users/Create'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create(['name'=>$request->name()]);
        return to_route('users.index');
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
        $user = User::find($id);

        return Inertia::render('Admin/Users/Edit', [
            'user' => new UserResource($user)  

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findById($id);
        $user->delete();
        return back();
    }
}
