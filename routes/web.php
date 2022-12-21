<?php

use Illuminate\Support\Facades\Route;

/*
 * Frontend controllers
 */

use App\Http\Controllers\Frontend\Home\IndexController as HomeIndexController;

/*
 * Auth controllers
 */

use App\Http\Controllers\Auth\Login\IndexController as AuthLoginIndexController;
use App\Http\Controllers\Auth\Login\StoreController as AuthLoginStoreController;
use App\Http\Controllers\Auth\Logout\IndexController as AuthLogout;

/*
 * Backend controllers
 */

use App\Http\Controllers\Backend\Dashboard\IndexController as BackendDashboardIndexController;

/*
 * Person controllers
 */

use App\Http\Controllers\Backend\Person\IndexController as BackendPersonIndexController;
use App\Http\Controllers\Backend\Person\CreateController as BackendPersonCreateController;
use App\Http\Controllers\Backend\Person\EditController as BackendPersonEditController;

/*
 * Organization controllers
 */

use App\Http\Controllers\Backend\Organization\IndexController as BackendOrganizationIndexController;
use App\Http\Controllers\Backend\Organization\CreateController as BackendOrganizationCreateController;
use App\Http\Controllers\Backend\Organization\EditController as BackendOrganizationEditController;

/*
 * Organization controllers
 */

use App\Http\Controllers\Backend\Subscription\IndexController as BackendSubscriptionIndexController;
use App\Http\Controllers\Backend\Subscription\CreateController as BackendSubscriptionCreateController;
use App\Http\Controllers\Backend\Subscription\EditController as BackendSubscriptionEditController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * Frontend routes
 */

Route::get('/', HomeIndexController::class)->name('home');

/*
 * Guest routes
 */

Route::group([
    'middleware' => 'guest',
    'prefix'     => 'auth',
    'as'         => 'auth.'
], function () {
    Route::get('/login', AuthLoginIndexController::class)->name('login');
    Route::post('/login', AuthLoginStoreController::class)->name('login.store');
});

/*
 * Auth routes
 */

Route::group([
    'middleware' => ['auth', 'role:admin'],
    'prefix'     => 'admin',
    'as'         => 'admin.'
], function () {

    /*
     * Dashboard
     */

    Route::get('/', BackendDashboardIndexController::class)->name('dashboard');

    /*
     * Logout
     */

    Route::get('/logout', AuthLogout::class)->name('logout');

    /*
     * Person routes
     */

    Route::group([
        'prefix' => '/person',
        'as'     => 'person.'
    ], function () {
        Route::get('/', BackendPersonIndexController::class)->name('index');
        Route::get('/create', BackendPersonCreateController::class)->name('create');
        Route::get('/edit/{id}', BackendPersonEditController::class)->name('edit');
    });

    /*
     * Organization routes
     */

    Route::group([
        'prefix' => '/organization',
        'as'     => 'organization.'
    ], function () {
        Route::get('/', BackendOrganizationIndexController::class)->name('index');
        Route::get('/create', BackendOrganizationCreateController::class)->name('create');
        Route::get('/edit/{id}', BackendOrganizationEditController::class)->name('edit');
    });

    /*
     * Subscription routes
     */

    Route::group([
        'prefix' => '/subscription',
        'as'     => 'subscription.'
    ], function () {
        Route::get('/', BackendSubscriptionIndexController::class)->name('index');
        Route::get('/create', BackendSubscriptionCreateController::class)->name('create');
        Route::get('/edit/{id}', BackendSubscriptionEditController::class)->name('edit');
    });
});

