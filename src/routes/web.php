<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web', 'prefix' => 'xui-docs'], function () {

    Route::view('/', 'xui::xui-docs.index')->name('xui::index');
    Route::view('/colors', 'xui::xui-docs.colors')->name('xui::colors');
    Route::view('/grids', 'xui::xui-docs.grids')->name('xui::grids');
    Route::view('/cards', 'xui::xui-docs.cards')->name('xui::cards');
    Route::view('/alerts', 'xui::xui-docs.alerts')->name('xui::alerts');

});