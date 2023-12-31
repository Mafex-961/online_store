<?php 

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Item;
use App\Models\Animal;
use App\Models\Horse;
use App\Models\TestAnswer;
use App\Models\oodTest;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ItemController;
use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/check-out',[ShopController::class,'checkout']);

Route::get('/',function(){
  dd('hiii');
});

Route::prefix('admin')->middleware([AdminAuth::class])-> group(function(){

  Route::view('/','layouts.master');
  
  Route::get('category/index',[CategoryController::class,'index']);
  Route::post('category',[CategoryController::class,'store']);
  Route::get('category/create',[CategoryController::class,'create']);
  Route::get('category/{id}/edit',[CategoryController::class,'edit']);
  Route::get('category/{id}',[CategoryController::class,'show']);
  Route::resource('sub_category',SubCategoryController::class); 
  Route::resource('brand',BrandController::class);
  Route::resource('company',CompanyController::class);  
  Route::resource('item',ItemController::class);  
  Route::resource('admin',AdminController::class);  
  
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
