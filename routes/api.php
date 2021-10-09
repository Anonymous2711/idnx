<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => "user"], function () {
    Route::post('login', "UserController@login")->name('api.user.login');
});

Route::group(['prefix' => "solog"], function () {
    Route::get('routestart', "ApiController@routestart")->name('api.routestart');
    Route::post('routeend', "ApiController@routeEnd")->name('api.routeEnd');
    Route::get('commodity', "ApiController@commodity")->name('api.commodity');
    Route::post('calculate', "ApiController@calculate")->name('api.calculate');
    Route::post('resi', "ApiController@resi")->name('api.resi');
});
