<?php

use App\Http\Controllers\Web3LoginController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicCarController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserCarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LockScreenController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


/*Route::resource('/CarsIndex', [CarController::class, 'index'])->name('Cars.index');
Route::resource('/RolesIndex', [RoleController::class, 'index'])->name('Role.index');
Route::resource('/UsersIndex', [UserController::class, 'index'])->name('User.index'); */

Route::resource('/cars', CarController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/users', UserController::class);
Route::resource('/mech', MechanicCarController::class);
Route::resource('/user', UserCarController::class);

/*Route::resource('/Cars', CarController::class)->names([
    'index' => 'Cars.index',
]);
Route::resource('/Roles', RoleController::class)->names([
    'index' => 'Roles.index',
]);
Route::resource('/Users', UserController::class)->names([
    'index' => 'Users.index',
]); */


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/home', function(){
        return Inertia::render('SharedPage');
    })->name('shareddash');
    Route::get('/cars/{car}/edit', 'App\Http\Controllers\CarController@edit')->name('cars.edit');

    Route::get('/lock_screen','App\Http\Controllers\LockScreenController@lockScreen')->name('lockscreen');
});

Route::get('/metamask-login',function(){
    if(Auth::check()){
        return redirect()->route("dashboard");
    }

});

Route::get('/loginWeb3',[Web3LoginController::class, 'verifySignature']);
Route::post('/loginWeb3',[Web3LoginController::class,'nonce']);
Route::post('/loginWeb3',[Web3LoginController::class,'login']);

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
