<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('public.index');
});

Route::get('/create', function () {
    return view('public.create');
});

Route::fallback(function () {
    return view('public.index');
});
