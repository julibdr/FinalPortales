<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowHomeController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\AuthArticlesController;
use App\Http\Controllers\Admin\ArticlesController as AdminArticlesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BuyerController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShowEstadisticaController;


Route::resource('registro_admin', UsersController::class);
Route::resource('crear_profiles', ProfilesController::class);
Route::resource('profile', ShowProfileController::class);
Route::resource('buyer', BuyerController::class)->middleware('auth');
Route::resource('articles', AdminArticlesController::class)->middleware('auth');
Route::resource('show_estadisticas', ShowEstadisticaController::class);


Route::get('login_admin', [LoginController::class, 'index'])->name('login');
Route::post('login_admin', [LoginController::class, 'loginAdmin']);
Route::post('confirmacion', [ShowEstadisticaController::class, 'confirmar']);


//Vistas simples
Route::get('/', [ShowHomeController::class, 'index']);
Route::get('/index', [ShowHomeController::class, 'index']);
Route::get('/blog', [ArticlesController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/show_profile', [ShowProfileController::class, 'index']);

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login_admin');
});



