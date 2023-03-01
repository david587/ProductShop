<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\AuthController;
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

Route::group([ "middleware" => [ "auth:sanctum" ]], function() {

    Route::post( "/logout", [ AuthController::class, "logout" ]);

    Route::post( "/products", [ ProductController::class, "create" ]);
    Route::put( "/product/{id}", [ ProductController::class, "update" ]);
    Route::delete( "/delete/{id}", [ ProductController::class, "destroy" ]);
    Route::get("/users", [AuthController::class, "index"]);
    Route::post("/users", [AuthController::class, "create"]);
    Route::put("/users/{id}", [AuthController::class, "update"]);
    Route::delete("/users/{id}", [AuthController::class, "destroy"]);
});

Route::post( "/register", [ AuthController::class, "signUp" ]);
Route::post( "/login", [ AuthController::class, "signIn" ]);
Route::get( "/products", [ ProductController::class, "index" ]);
Route::get( "/product/{id}", [ ProductController::class, "show" ]);




