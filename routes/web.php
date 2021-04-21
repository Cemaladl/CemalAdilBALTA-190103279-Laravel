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
Route::get('client/create', function() {
    return view('client.create');
});

Route::post('client/create', [ClientController::class, 'store'])->name('add-client');
Route::get('client/{id}', [ClientController::class, 'get_client']);

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('deneme', function() {
    return view('deneme');
});