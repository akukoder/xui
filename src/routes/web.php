<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web', 'prefix' => 'xui-docs'], function () {

    Route::view('/', 'xui::docs.index')->name('xui::index');
    Route::view('/colors', 'xui::docs.colors')->name('xui::colors');
    Route::view('/grids', 'xui::docs.grids')->name('xui::grids');
    Route::view('/cards', 'xui::docs.cards')->name('xui::cards');

});