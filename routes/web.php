<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

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

// Route::get('/', function () {
//     return view('test');
// });
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::middleware(['cors'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_admin');

Route::get('users',[App\Http\Controllers\UserController::class , 'index'])->name('users.list');
Route::get('api/users',[App\Http\Controllers\UserController::class , 'users']);

Route::get('employees/list',[App\Http\Controllers\EmployeeController::class , 'index']);
Route::post('employees/store',[App\Http\Controllers\EmployeeController::class , 'store']);
Route::delete('employees/delete/{id}',[App\Http\Controllers\EmployeeController::class , 'delete']);

Route::get('employees/show/{id}',[App\Http\Controllers\EmployeeController::class , 'show']);
Route::post('employees/update/{id}',[App\Http\Controllers\EmployeeController::class , 'update']);

Route::get('profile/show/{id}',[App\Http\Controllers\EmployeeController::class , 'showProfile']);
Route::post('profile/update/{id}',[App\Http\Controllers\EmployeeController::class , 'updateProfile']);



Route::get('/demo/list',[App\Http\Controllers\EmployeeController::class , 'demoList']);
Route::post('/demoStore',[App\Http\Controllers\EmployeeController::class , 'demoStore']);


Route::post('/change-locale', [App\Http\Controllers\HomeController::class, 'changeLocale']);



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::any('{any}', function ()
{
    return view('view.routeView');
})->where('any','.*');

});
