<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\AdminHomeController as AdminHouseController;
use App\Http\Controllers\AdminPanel\ImageController as AdminImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\CommentConroller;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserHouseController;
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







Route::prefix('/')->name('home.')->controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/contact','contact')->name('contact');
    Route::get('/about','about')->name('about');
    Route::get('/references','references')->name('references');
    Route::post('/storemessage','storemessage')->name('storemessage');
    Route::post('/storecomment','storecomment')->name('storecomment');
    Route::post('/updatecomment/{id}','updatecomment')->name('updatecomment');
    Route::get('/faq','faq')->name('faq');
    Route::get('/loginuser','loginuser')->name('.loginuser');
    Route::get('/registeruser','registeruser')->name('.registeruser');
    Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
    Route::post('/loginadmincheck', [HomeController::class, 'loginadmin'])->name('loginadmin');
    Route::get('/categoryhouses/{id}/{slug}', [HomeController::class, 'categoryhouses'])->name('categoryhouses');
    Route::get('/house/{houseid}','house')->name('.house');
    Route::post('/housesfilter','housesfilter')->name('.housesfilter');
    Route::post('/housesearch',[HomeController::class,'housesearch'])->name('.housessearch');
    
});






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/loginadmin','admin.login')->name('admin.login');

///////////////////////////////User Auth////////////////////////////////
Route::middleware('auth')->group(function(){
///////////////////////////////User Page////////////////////////////////
    Route::prefix('/userpanel')->name('userpanel.')->group(function(){
        
        Route::get('/',[UserController::class,'index'])->name('.index');
        Route::get('/reviews',[UserController::class,'reviews'])->name('reviews');

        //*             Reviews                 */

        Route::prefix('reviews')->name('reviews.')->controller(UserController::class)->group(function(){
            //***revievs create vs.. */

            Route::get('/edit/{id}','reviewsedit')->name('edit');


        });
        /*             Adverts                 */
        //Route::get('/adverts',[UserController::class,'adverts'])->name('adverts');

        Route::prefix('adverts')->name('adverts.')->controller(UserHouseController::class)->group(function(){
            //****adverts create vs.. */
            Route::get('/','index')->name('.index');
            Route::get('/create','create')->name('.create');
            Route::post('/store','store')->name('.store');
            Route::get('/edit/{id}','edit')->name('.edit');
            Route::post('/update/{id}','update')->name('.update');
            Route::get('/show/{id}','show')->name('.show');
            Route::get('/destroy/{id}','destroy')->name('.destroy');
            
        });

        /*              Images                  */

        Route::prefix('image')->name('image')->controller(AdminImageController::class)->group(function(){
            Route::get('/{pid}','index')->name('.index');
            
            Route::post('/store/{pid}','store')->name('.store');
            Route::post('/update/{pid}/{id}','update')->name('.update');
            Route::get('/destroy/{pid}/{id}','destroy')->name('.destroy');
        });

    });

///////////////////////////////Admin Page////////////////////////////////
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){
        Route::get('/',[AdminHomeController::class,'index'])->name('index');

        Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
        Route::post('/setting/update',[AdminHomeController::class,'update'])->name('setting.update');


        /////////////////////////Category admin/////////////
        Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function(){
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
            Route::get('/','index')->name('.index');
            Route::get('/create','create')->name('.create');
            Route::post('/store','store')->name('.store');
            Route::get('/edit/{id}','edit')->name('.edit');
            Route::post('/update/{id}','update')->name('.update');
            Route::get('/show/{id}','show')->name('.show');
            Route::get('/destroy/{id}','destroy')->name('.destroy');
        });

        /*              Images                  */

        Route::prefix('image')->name('image')->controller(AdminImageController::class)->group(function(){
            Route::get('/{pid}','index')->name('.index');
            
            Route::post('/store/{pid}','store')->name('.store');
            Route::post('/update/{pid}/{id}','update')->name('.update');
            Route::get('/destroy/{pid}/{id}','destroy')->name('.destroy');
        });

        /*             Messages                */


        Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function(){
            Route::get('/','index')->name('index');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });

        /*              FAQ                    */
        Route::prefix('faq')->name('faq')->controller(FaqController::class)->group(function(){
            Route::get('/','index')->name('.index');
            Route::get('/create','create')->name('.create');
            Route::post('/store','store')->name('.store');
            Route::get('/edit/{id}','edit')->name('.edit');
            Route::post('/update/{id}','update')->name('.update');
            Route::get('/show/{id}','show')->name('.show');
            Route::get('/destroy/{id}','destroy')->name('.destroy');
        });


        /*             Messages                */


        Route::prefix('comment')->name('comment.')->controller(CommentConroller::class)->group(function(){
            Route::get('/','index')->name('index');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });


        /*             Users                */


        Route::prefix('user')->name('user.')->controller(AdminUserController::class)->group(function(){
            Route::get('/','index')->name('index');
            Route::post('/update/{id}','update')->name('update');
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::post('/removerole/{id}','removerole')->name('removerole');
            
        });
    });
});


// Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name("admin_login");
// Route::post('/admin/login/check',[\App\Http\Controllers\Admin\HomeController::class,'login_check'])->name("admin_login_check");
// Route::get('/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name("logout");
