<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

View::addNamespace('submodule', base_path('submodule-repo-new/resources/views'));

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sub', function () {
    return view('submodule::sub');
});
