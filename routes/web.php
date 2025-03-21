<?php

use Illuminate\Support\Facades\Route;
// dashboard
Route::get('/', function () {
    return view('welcome');
});
// Tipe data dan Operator Aritmatika
// materi 1
Route::get('/single-quote', function () {
    return view('single-quote');
});
// materi 2
Route::get('/double-quote', function () {
    return view('double-quote');
});
// materi 3
Route::get('/tipe-data-array', function () {
    return view('tipe-data-array');
});
// materi 4
Route::get('/tipe-data-array2', function () {
    return view('tipe-data-array2');
});
// materi 5
Route::get('/operator-aritmatika', function () {
    return view('operator-aritmatika');
});
// materi 6
Route::get('/operator-string', function () {
    return view('operator-string');
});
// materi 7
Route::get('/operator-perbandingan', function () {
    return view('operator-perbandingan');
});
// materi 8
Route::get('/operator-logika', function () {
    return view('operator-logika');
});

// Selection Pada laravel 12
// materi 9
Route::get('/if-statement', function () {
    return view('if-statement');
});
Route::get('/if-statement2', function () {
    return view('if-statement2');
});
// materi 10
Route::get('/else-if-statment', function () {
    return view('else-if-statment');
});
// materi 11
Route::get('/switch-statement', function () {
    return view('switch-statement');
});
Route::get('/switch-statement2', function () {
    return view('switch-statement2');
});
Route::get('/switch-statement3', function () {
    return view('switch-statement3');
});

// Looping pada laravel 12
// materi 12
Route::get('/perulangan-dengan-for', function () {
    return view('perulangan-dengan-for');
});
Route::get('/perulangan-dengan-for2', function () {
    return view('perulangan-dengan-for2');
});
// materi 13
Route::get('/perulangan-dengan-while', function () {
    return view('perulangan-dengan-while');
});
Route::get('/perulangan-dengan-while2', function () {
    return view('perulangan-dengan-while2');
});
// materi 14
Route::get('/perulangan-dengan-do-while', function () {
    return view('perulangan-dengan-do-while');
});
Route::get('/perulangan-dengan-do-while2', function () {
    return view('perulangan-dengan-do-while2');
});
// materi 15
Route::get('/perulangan-foreach', function () {
    return view('perulangan-foreach');
});
