<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Spatie\Permission\Models\Role;
use App\Http\Resources\RoleResource;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\CreateRoleRequest;
 
class RoleController extends Controller
{

    public function index(): Response
    {
        return Inertia::render('Admin/Roles/RolesIndex',[
    'roles'=>RoleResource::collection(Role::all())]);
    }
    public function toArray(Request $request):array{
        return [
            'id'=>$this->id,
            'name'=>$this->name,

        ];
    }
    public function create():Response{
        return Inertia::render(component:'Admin/Roles/Create'); 
    }
    public function store(CreateRoleRequest $request){
        Role::create(['name'=>$request->name()]);
        return to_route('roles.index');
    }
}
