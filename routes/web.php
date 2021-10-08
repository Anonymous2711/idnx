<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "UserController@index")->name('user.index');
Route::get('faq', "UserController@faq")->name('user.faq');
Route::get('{slug?}', 'UserController@page')->name('user.page');

Route::get('pwd', function () {
    return bcrypt("sandinepodo");
});

Route::group(['prefix' => "admin"], function () {
    Route::get('login', "AdminController@loginPage")->name('admin.loginPage');
    Route::post('login', "AdminController@login")->name('admin.login');
    Route::get('logout', "AdminController@logout")->name('admin.logout');

    Route::get('dashboard', "AdminController@dashboard")->name('admin.dashboard')->middleware('Admin');

    Route::group(['prefix' => "page"], function () {
        Route::get('create', "PageController@create")->name('admin.pages.create')->middleware('Admin');
        Route::get('{id}/edit', "PageController@edit")->name('admin.pages.edit')->middleware('Admin');
        Route::post('{id}/update', "PageController@update")->name('admin.pages.update')->middleware('Admin');
        Route::get('/', "AdminController@pages")->name('admin.pages')->middleware('Admin');
    });

    Route::group(['prefix' => "admin"], function () {
        Route::post('store', "AdminController@store")->name('admin.admin.store')->middleware('Admin');
        Route::post('update', "AdminController@update")->name('admin.admin.update')->middleware('Admin');
        Route::get('{id}/delete', "AdminController@delete")->name('admin.admin.delete')->middleware('Admin');
        Route::get('/', "AdminController@admin")->name('admin.admin')->middleware('Admin');
    });

    Route::group(['prefix' => "faq"], function () {
        Route::post('store', "FaqController@store")->name('admin.faq.store')->middleware('Admin');
        Route::post('update', "FaqController@update")->name('admin.faq.update')->middleware('Admin');
        Route::get('{id}/delete', "FaqController@delete")->name('admin.faq.delete')->middleware('Admin');
        Route::get('/', "AdminController@faq")->name('admin.faq')->middleware('Admin');
    });
});
