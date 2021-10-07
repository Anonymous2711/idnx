<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "UserController@index")->name('user.index');
Route::get('page/{id}', 'UserController@page')->name('user.page');

Route::get('pwd', function () {
    return bcrypt("sandinepodo");
});

Route::group(['prefix' => "admin"], function () {
    Route::get('login', "AdminController@loginPage")->name('admin.loginPage');
    Route::post('login', "AdminController@login")->name('admin.login');
    Route::get('logout', "AdminController@logout")->name('admin.logout');

    Route::get('dashboard', "AdminController@dashboard")->name('admin.dashboard');

    Route::group(['prefix' => "page"], function () {
        Route::get('create', "PageController@create")->name('admin.pages.create');
        Route::get('{id}/edit', "PageController@edit")->name('admin.pages.edit');
        Route::post('{id}/update', "PageController@update")->name('admin.pages.update');
        Route::get('/', "AdminController@pages")->name('admin.pages');
    });
});
