<?php

use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::post("user", [UserController::class, "create"]);

Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
  return $request->user()->tokens();
});

Route::resource("medicine", MedicineController::class)->middleware(
  "auth:sanctum"
);
