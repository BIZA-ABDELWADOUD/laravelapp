<?php

use Illuminate\Support\Facades\Route;

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


//all routes that shoud be translated

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    //route to handle dashboard with HR
    Route::view('/dashboard','dashboard.HR.dashboard')->middleware(['auth'])->name('dashboard');

    //routes for authentication and registration handling
    require __DIR__.'/auth.php';

//Route::view(LaravelLocalization::transRoute('routes.about'), 'about')->name('about');

    //routes for admin
    require __DIR__.'/admin.php';

});



Route::get('/', function () {
    return view('welcome');
});


