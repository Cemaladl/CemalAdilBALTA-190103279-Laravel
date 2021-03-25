<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;

use App\Http\Controllers\ClientController;




Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('client/add', function() {
    DB::table('clients')->insert([
        'name' => 'Cemal',
        'surname' => 'BALTA',
        'age' => 20
    ]);
});

Route::get('client', [ClientController::class, 'index']);  