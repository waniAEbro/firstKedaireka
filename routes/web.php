<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemTypeController;

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
    return view('welcome');
});

// Route Items

Route::get("/item", [ItemController::class, "index"]);

Route::get("/item/create", [ItemController::class, "create"]);

Route::post("/item", [ItemController::class, "store"]);

Route::get("/item/{item}/edit", [ItemController::class, "edit"]);

Route::put("/item/{item}", [ItemController::class, "update"]);

Route::delete("/item/{item}", [ItemController::class, "destroy"]);

// Route Item Types

Route::get("/item-type", [ItemTypeController::class, "index"]);

Route::get("/item-type/create", [ItemTypeController::class, "create"]);

Route::post("/item-type",  [ItemTypeController::class, "store"]);

Route::get("/item-type/{item_type}/edit", [ItemTypeController::class, "edit"]);

Route::put("/item-type/{item_type}", [ItemTypeController::class, "update"]);

Route::delete("/item-type/{item_type}", [ItemTypeController::class, "destroy"]);