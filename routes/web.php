<?php

use Illuminate\Support\Facades\Route;

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
    $pasta = config('pasta');

    $paste = [
        'lunga' => [],
        'corta' => [],
        'cortissima' => [],
    ];
    foreach($pasta as $prodotto) {
        $paste[$prodotto['tipo']][] = $prodotto;
    }

    return view('home', compact('paste'));
});
