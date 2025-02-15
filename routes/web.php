<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/Ourteam', function () {
    return view('Ourteam');
})->name('Ourteam');

Route::get('/MissonandVison', function () {
    return view('MissonandVison');
})->name('MissonandVison');

Route::get('/OurManagement', function () {
    return view('OurManagement');
})->name('OurManagement');

Route::get('/Photogallary', function () {
    return view('Photogallary');
})->name('Photogallary');


Route::get('/Achievements', function () {
    return view('Achievements');
})->name('Achievements');