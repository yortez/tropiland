<?php

use App\Livewire\Facilities;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\RoomsAndSuites;

Route::get('/login', function () {
    return view('auth.login-page');
});
Route::get('/book', function () {
    return view('booking-page');
});
Route::get('/success', function () {
    return view('success');
});

Route::get('/', HomePage::class);
Route::get('/facilities', Facilities::class);
Route::get('/rooms-and-suites', RoomsAndSuites::class);
