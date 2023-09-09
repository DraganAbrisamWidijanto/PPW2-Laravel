<?php

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

    Route::get('/about', function () {
        return view('about', [
            'name' => 'Dragan',
            'email' => 'draganabrisam@mail.ugm.ac.id'
        ]);
    });

    Route::get('/page', function () {
        return view('page'
        );
    });

    Route::get('/footerr', function () {
        return view('footerr'
        );
    });

    Route::get('/konten', function () {
        return view('konten'
        );
    });
   

    Route::get('/boom', [MencobaController::class, 'boomesport']);
    Route::get('/prx', [MencobaController::class, 'prxesport']);
    Route::get('/fnantic', [MencobaController::class, 'fnanticesport']);
    Route::get('/fpx', [MencobaController::class, 'fpxesport']);
    Route::get('/', [MencobaController::class, 'beranda']);
   