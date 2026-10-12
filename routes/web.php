<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('welcome');
});


// http://localhost/login
Route::get('/login', function () {
    return 'Page de login';
});

// http://localhost/page/1
Route::get('/page/{id}', function ($id) {
    return 'Je suis la page ' . $id;
});
Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
});

Route::get('contact', function() {
    return "C'est moi le contact.";
});
Route::get('/test1/{param}', function($param) {
    return "Param vaut : " . $param;
});
Route::get('/test2/{param}', function($param) {
    return view('tp', ["param" => $param]);
});
