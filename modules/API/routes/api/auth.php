<?php
/**
 * JUZAWEB CMS - Laravel CMS for Your Project
 *
 * @package    juzaweb/juzacms
 * @author     The Anh Dang
 * @link       https://juzaweb.com/cms
 * @license    GNU V2
 */

use Juzaweb\API\Http\Controllers\Auth\LoginController;

Route::group(
    ['prefix' => 'auth'],
    function () {
        Route::post('login', [LoginController::class, 'login']);
    }
);

Route::group(
    [
        'prefix' => 'auth',
        'middleware' => 'auth:api',
    ],
    function () {
        Route::post('logout', [LoginController::class, 'logout']);
    }
);
