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
    foreach($pasta as $index => $prodotto) {
        $prodotto['id'] = $index;
        $paste[$prodotto['tipo']][] = $prodotto;
    }

    return view('home', compact('paste'));
})->name('home');

Route::get('prodotto/{id}', function ($id) {
    $pasta = config('pasta');

    if($id >= count($pasta)) {
        abort('404');
    }

    $prodotto = $pasta[$id];

    return view('product', compact('prodotto'));
})->where('id', '[0-9]+')->name('product');