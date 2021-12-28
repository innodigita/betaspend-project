<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\isAdmin;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TemplateController::class, 'index']);

Route::middleware(['isAdmin'])->get('/administration', [AdminController::class, 'index'])->name('administration');

Route::get('/administration/register', [AdminController::class, 'admin_register']);

Route::get('/administration/login', [AdminController::class, 'admin_login']);

Route::get('/administration/reset', [AdminController::class, 'admin_reset']);

Route::middleware(['isAdmin'])->get('/administration/view_category', [AdminController::class, 'view_category'])->name('administration/view_category');

Route::middleware(['isAdmin'])->get('/administration/add_category', [AdminController::class, 'add_category']);

Route::get('/administration/add-sub-category', [AdminController::class, 'view_add_sub_category']);

Route::get('/administration/add-product', [AdminController::class, 'add_product']);

Route::get('/administration/view-product', [AdminController::class, 'view_product']);

Route::get('/administration/orders', [AdminController::class, 'orders']);

Route::get('/administration/add-sub-category', [AdminController::class, 'add_sub_category']);

Route::post('/administration/add-sub-category', [AdminController::class, 'add_sub_category']);

Route::get('/administration/sub-category', [AdminController::class, 'view_sub_category'])->name('/administration/sub-category');

Route::get('/shop', [ProductsController::class, 'index']);

Route::get('/details', [ProductsController::class, 'product_details']);

Route::get('/contact', [TemplateController::class, 'contact']);

Route::get('/become-a-vendor', [TemplateController::class, 'become_a_vendor']);

Route::get('/vendors', [TemplateController::class, 'vendors']);

Route::get('/vendors-list', [TemplateController::class, 'vendors_list']);

Route::get('/vendors-details', [TemplateController::class, 'vendors_details']);

Route::get('/vendors-details-list', [TemplateController::class, 'vendors_details_list']);

Route::get('/my-account', [TemplateController::class, 'my_account']);

// Route::get('/login2', [TemplateController::class, 'login']);

Route::get('/cart', [TemplateController::class, 'cart']);

Route::get('/wishlist', [TemplateController::class, 'wishlist']);

Route::get('/compare', [TemplateController::class, 'compare']);

Route::get('/checkout', [TemplateController::class, 'checkout']);

Route::post('/administration/category/new', [AdminController::class,  'store' ] );


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
