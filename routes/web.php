<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\AdminHomeController as AdminHouseController;
use App\Http\Controllers\AdminPanel\ImageController as AdminImageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! ajhsjdhf
|
*/

// Route::get('/', function () {
//     return view('home.index');
// });
// Route::get('/home',function(){
//     return view('home.index');
// });

Route::prefix('/')->name('home')->controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/home','index')->name('index');

});


Route::prefix('house')->name('home')->controller(HomeController::class)->group(function(){
    Route::get('/{houseid}','house')->name('house');

});

Route::get('/categoryhouses/{id}/{slug}', [HomeController::class, 'categoryhouses'])->name('categoryhouses');

Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
///////////////////////////////Admin Page////////////////////////////////
Route::prefix('admin')->name('admin')->group(function(){
    Route::get('/',[AdminHomeController::class,'index'])->name('index');

    Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');


    /////////////////////////Category admin/////////////
    Route::prefix('category')->name('category')->controller(CategoryController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

    /*              Home                    */
    Route::prefix('house')->name('house')->controller(AdminHouseController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');
    });

    /*              Images                  */

    Route::prefix('image')->name('image')->controller(AdminImageController::class)->group(function(){
        Route::get('/{pid}','index')->name('index');
        
        Route::post('/store/{pid}','store')->name('store');
        Route::post('/update/{pid}/{id}','update')->name('update');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });


});

