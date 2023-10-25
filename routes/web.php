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

Route::get('/', function () {
    $title = 'Hello World';
    $title_sub = 'Laravel Primi Passi';
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem officiis necessitatibus atque repudiandae delectus dicta earum ratione aut sed similique nihil illum quos laborum, aliquam quo repellendus numquam iure. Saepe.';
    return view('home', compact('title', 'title_sub', 'text'));
});

Route::get('/lorem', function () {
    $title = 'This is only anoter lorem';
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem officiis necessitatibus atque repudiandae delectus dicta earum ratione aut sed similique nihil illum quos laborum, aliquam quo repellendus numquam iure. Saepe.';
    return view('lorem', compact('title', 'text'));
});

Route::get('/about', function () {
    $title = 'This is only anoter lorem';
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem officiis necessitatibus atque repudiandae delectus dicta earum ratione aut sed similique nihil illum quos laborum, aliquam quo repellendus numquam iure. Saepe.';
    return view('about', compact('title', 'text'));
});

// PARTIAL VIEWS
Route::get('/Partials/head', function () {
    return view('head');
});
