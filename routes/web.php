<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/mhs', function () {
//     return "mahasiswa";
// });


Route::get('/dosen/{nama}',[DosenController::class, 'index'])->name('dosen.index');
