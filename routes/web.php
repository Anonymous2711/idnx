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

    Route::group(['prefix' => "admin"], function () {
        Route::post('store', "AdminController@store")->name('admin.admin.store')->middleware('Admin');
        Route::post('update', "AdminController@update")->name('admin.admin.update')->middleware('Admin');
        Route::get('{id}/delete', "AdminController@delete")->name('admin.admin.delete')->middleware('Admin');
        Route::get('/', "AdminController@admin")->name('admin.admin');
    });
});
