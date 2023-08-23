<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PassengerController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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


//HomePage
Route::get('/', [homeController::class, 'index'])->name('homepage')->middleware('auth');


//Flight
Route::get('/Flight', [AirlineController::class, 'index'])->name('flight');
Route::get('/Flight/reserver/{airline}', [AirlineController::class, 'reserver'])->name('passenger.reserver');
Route::post('/Flight', [AirlineController::class, 'store'])->name('passenger.store');


//Registration Passenger
Route::controller(PassengerController::class)->group(function () {
    Route::get('show/{passenger}', 'show')->where('id', '\d+')->name('show');
        Route::prefix('Register/')->group(function () {
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
    });
});


//Login
Route::name('login.')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login',  'show')->name('show');
        Route::post('/login',  'login')->name('login');
        Route::get('/logout', 'logout')->name('logout');
        //Route::delete('profile/{passenger}'  , [LoginController::class , 'destroy'])->name('profile.supprimer');
        Route::get('/login/edit/{passenger}', 'edit')->name('edit');
        Route::put('/login/{passenger}',  'update')->name('modifier');
    });
});


//Route Admin
Route::middleware(['auth' , 'role'])->group(function(){
    Route::controller(AdminController::class)->group(function () {
        //Admin add , show , supprimer  , modifier (Passenger)
        Route::get('/admin/index',  'showAdmin')->name('admin.index');
        Route::get('/profiles',  'index')->name('index');
        Route::get('Admin/show/{passenger}',  'show')
            ->where('id', '\d+')
            ->name('profile.show');
        Route::delete('admin/{passenger}',  'destroy')
            ->name('supprimer');
    
        Route::prefix('admin/')->group(function () {
            //Admin add , show , supprimer  , modifier (Flights)
            //Add
            Route::get('flights', 'showflight')->name('show.flight');
            Route::get('flight', 'add')->name('admin.add');
            Route::post('flight/store', 'store')->name('flight.store');
    
            //show
            Route::get('show/flight/{airline}', 'flightdetail')
                ->where('id', '\d+')
                ->name('flight.detail');
    
            //Delete
            Route::delete('flight/{airline}', 'deleteflight')
                ->name('supprimer.flight');
    
            //modifier
            Route::get('edit/{airline}', 'edit')->name('admin.edit');
            Route::put('{airline}', 'update')->name('admin.modifier');
        });
    });
});
