<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;
Route::resource('equipments', EquipmentController::class);
Route::get('/', function () { return redirect()->route('equipments.index'); });