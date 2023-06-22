<?php

use App\Http\Controllers\note_controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Tampilan Utama //
Route::get('/note', [note_controllers::class, 'index']);
//create
Route::post('/note',[note_controllers::class,'store']);
//selengkapnya
Route::get('/note/{id}/show',[note_controllers::class,'show']);
//halaman edit
Route::get('/note/{id}/edit',[note_controllers::class,'edit']);
//update
Route::patch('/note/{id}',[note_controllers::class,'update']);
//delete
Route::delete('/note/{id}',[note_controllers::class,'destroy']);
