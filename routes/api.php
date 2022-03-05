<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('hello/{name?}',function($name =null)
{
    return "Hello ".$name;
}
);
Route::post('register',[UserController::class,'register']);
Route::get('users',[UserController::class,'users']);
Route::get('deleteuser/{id}',[UserController::class,'deleteUser']);
Route::get('searchById/{id}',[UserController::class,'searchById']);