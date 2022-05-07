<?php
/**
 * JUZAWEB CMS - The Best CMS for Laravel Project
 *
 * @package juzaweb/juzacms
 * @author The Anh Dang
 *
 * Developed based on Laravel Framework
 * Github: https://juzaweb.com/cms
 */

use Juzaweb\Backend\Http\Controllers\Backend\ThemeController;
use Juzaweb\Backend\Http\Controllers\Backend\RequirePluginController;
use Juzaweb\Backend\Http\Controllers\Backend\ReadingController;
use Juzaweb\Backend\Http\Controllers\Backend\WidgetController;
use Juzaweb\Backend\Http\Controllers\Backend\MenuController;

Route::group(
    ['prefix' => 'themes'],
    function () {
        Route::get('/', 'Backend\ThemeController@index')->name('admin.themes');
        Route::get('/get-data', 'Backend\ThemeController@getDataTheme')->name('admin.themes.get-data');
        Route::get('/require-plugins', 'Backend\RequirePluginController@index')->name('admin.themes.require-plugins');

        Route::get(
            '/require-plugins/get-data',
            'Backend\RequirePluginController@getData'
        )->name('admin.themes.require-plugins.get-data');

        Route::post(
            '/require-plugins/buld-actions',
            'Backend\RequirePluginController@bulkActions'
        )->name('admin.themes.require-plugins.buld-actions');
        Route::delete('/delete', 'Backend\ThemeController@delete')->name('admin.themes.delete');
        Route::post('/activate', 'Backend\ThemeController@activate')->name('admin.themes.activate');

        Route::get('/install', 'Backend\ThemeController@install')->name('admin.theme.install');
        Route::post('/update', 'Backend\ThemeController@update')->name('admin.theme.update');
        Route::get('/install/all', 'Backend\ThemeController@getDataThemeInstall')->name('admin.theme.install.all');
    }
);

Route::group(
    ['prefix' => 'reading'],
    function () {
        Route::get('/', 'Backend\ReadingController@index')->name('admin.reading');

        Route::post('/save', 'Backend\ReadingController@save')->name('admin.reading.save');
    }
);

Route::group(
    ['prefix' => 'permalinks'],
    function () {
        Route::get('/', 'Backend\PermalinkController@index')->name('admin.permalink');

        Route::post('/save', 'Backend\PermalinkController@save')->name('admin.permalink.save');
    }
);

Route::group(
    ['prefix' => 'menus'],
    function () {
        Route::get('/', 'Backend\MenuController@index')->name('admin.menu');
        Route::get('/{id}', 'Backend\MenuController@index')->name('admin.menu.id');
        Route::post('/store', 'Backend\MenuController@store')->name('admin.menu.store');
        Route::put('/{id}', 'Backend\MenuController@update')->name('admin.menu.update');
        Route::delete('/{id}', 'Backend\MenuController@destroy')->name('admin.menu.destroy');
        Route::post('/add-item', 'Backend\MenuController@addItem')->name('admin.menu.add-item');
    }
);

Route::group(
    ['prefix' => 'widgets'],
    function () {
        Route::get('/', 'Backend\WidgetController@index')->name('admin.widget');
        Route::get('/get-item', 'Backend\WidgetController@getWidgetItem')->name('admin.widget.get-item');
        Route::put('/{key}', 'Backend\WidgetController@update')->name('admin.widget.update');
        Route::get('/form/{key}', 'Backend\WidgetController@getWidgetForm')->name('admin.widget.get-form');
    }
);
