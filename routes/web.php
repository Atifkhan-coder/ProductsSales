<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;

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
Route::get('/', function () {
    return redirect('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* ----------------------------------------------------------------------------------------------------*/
/*--------------------Admin Location...-----------------------------*/
Route::group(['middleware' => 'auth'], function ()
{
//Create Business...
    Route::view('CreateBusiness','CreateBusiness');
    Route::post('CreateBusiness', [BusinessController::class,'addbusiness'])->name('CreateBusiness');
//Add Products
    Route::get('AddProduct',[ProductController::class,'add']);
    Route::post('AddProduct', [ProductController::class,'addproduct'])->name('Add_Product');
//show Data Product List Data...
    Route::get('list',[ProductController::class,'show'])->name('Show_Product_list');
//Delete Operation From Product...
    Route::get('delete/{id}',[ProductController::class,'delete'])->name('Delete_Product');
//Edit Operation From Prdocut...
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('Edit_Product');
//Update Operation From Product...
    Route::post('/edit/{id}',[ProductController::class,'update'])->name('Update_Product');
//show Productlist...
    Route::get('salerecord',[ProductController::class,'salerecord'])->name('sale_Record');
//Remove Sale Record....
    Route::get('/sale/delete/{id}', [CartController::class,'deleteSale'])->name('Delete_Sale_Record');
//Create Category...
    Route::get('/category', [CategoryController::class,'create'])->name('Create_Category');
    Route::get('/category/{id}', [CategoryController::class,'show'])->name('Show_Category');
    Route::post('/category/store', [CategoryController::class,'store'])->name('Store Category');
//show Detail page...
    Route::get('show/{id}',[ProductController::class,'showone'])->name('Show_Page');
//Cart...
    Route::get('/buy/{id}', [ProductController::class,'cart'])->name('Cart');
    Route::post('/buy/product/{id}', [CartController::class,'cartBuy'])->name('Buy_Product');
});

/* ----------------------------------------------------------------------------------------------------*/
/*--------------------User Location...-----------------------------*/
//show Buy List...
    Route::get('home',[ProductController::class,'showbuy'])->name('Home_Page');
//show Detail page...
    Route::get('detail/{id}',[ProductController::class,'detail'])->name('Detail_Page');
//show Search page...
    Route::get('search',[ProductController::class,'search'])->name('Search_Page');
//About Us...
    Route::get('aboutus',[ProductController::class,'aboutus'])->name('About_Us');
//Contact ...
    Route::view('contact','contact');
    Route::post('contact', [ContactController::class,'contactus'])->name('Contact_Page');
//Services ...
    Route::get('services',[ProductController::class,'Services'])->name('Services_page');

