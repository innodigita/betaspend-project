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


/*
|--------------------------------------------------------------------------
| THE START OF BETASPEND ADMINISTRATION DASHBOARD CODE START
|--------------------------------------------------------------------------
*/

Route::middleware(['isAdmin'])->get('/administration', [AdminController::class, 'index'])->name('administration');

Route::get('/administration/register', [AdminController::class, 'admin_register']);

Route::get('/administration/login', [AdminController::class, 'admin_login']);

Route::get('/administration/reset', [AdminController::class, 'admin_reset']);


Route::middleware(['isAdmin'])->get('/administration/view_category', [AdminController::class, 'view_category'])->name('/administration/view_category');


Route::middleware(['isAdmin'])->get('/administration/add_category', [AdminController::class, 'add_category']);

Route::get('/administration/product-type', [AdminController::class, 'product_type']);

Route::get('/administration/add-product',  [ ProductsController::class, 'add_product']);

Route::get('/administration/view-product', [ ProductsController::class, 'view_product']);

Route::post('/administration/add/product', [ ProductsController::class, 'store']);



Route::get('/administration/orders', [AdminController::class, 'orders']);

Route::get('/administration/brands', [AdminController::class, 'brands']);
Route::get('/administration/add-brand', [AdminController::class, 'add_brand']);
Route::post('/administration/add-new-brand', [AdminController::class, 'add_new_brand']);

Route::get('/administration/attributes', [AdminController::class, 'attributes']);

Route::get('/administration/attribute-detail', [AdminController::class, 'attribute_detail']);

Route::get('/administration/attribute-color', [AdminController::class, 'attribute_color']);

Route::get('/administration/config-attribute', [AdminController::class, 'config_attribute']);


Route::get('/administration/view-add-sub-category', [AdminController::class, 'view_add_sub_category']);
//Route::get('/administration/add-sub-category', [AdminController::class, 'add_sub_category']);

Route::post('/administration/add-sub-category', [AdminController::class, 'add_sub_category']);

Route::get('/administration/sub-category', [AdminController::class, 'view_sub_category'])->name('./administration/sub-category');

Route::post('/administration/category/new', [AdminController::class,  'store' ] );



/*
|--------------------------------------------------------------------------
| THE START OF BETASPEND FRONT-END USERS CODE START
|--------------------------------------------------------------------------
*/


Route::get('/', [TemplateController::class, 'index']);

Route::get('/shop', [ProductsController::class, 'index'])->name('/shop');

//Route::get('/details/{prodId}', [ProductsController::class, 'product_details']);

Route::get('/sess', [ProductsController::class, 'sess']);

Route::get('/product/details/{prodId}', [ProductsController::class, 'product_details'])
                        ->name('/product/details');

Route::get('/product/bs-product-details', [ProductsController::class, 'bs_product_details']);

Route::get('/product/bs-digital-service', [ProductsController::class, 'bs_digital_service']);

Route::get('/contact', [TemplateController::class, 'contact']);

Route::get('/become-a-vendor', [TemplateController::class, 'become_a_vendor']);

Route::get('/vendors', [TemplateController::class, 'vendors']);

Route::get('/vendors-list', [TemplateController::class, 'vendors_list']);

Route::get('/vendors-details', [TemplateController::class, 'vendors_details']);

Route::get('/vendors-details-list', [TemplateController::class, 'vendors_details_list']);

Route::get('/my-account', [TemplateController::class, 'my_account']);

// Route::get('/login2', [TemplateController::class, 'login']);



Route::get('/product/cart', [TemplateController::class, 'cart']);

Route::get('/clear-cart', [TemplateController::class, 'clear_cart'])->name('clear-cart');

Route::post('/product/add-to-cart', [TemplateController::class, 'add_to_cart'])->name('/product/add-to-cart');




Route::get('/product/wishlist', [TemplateController::class, 'wishlist']);

Route::get('/product/compare', [TemplateController::class, 'compare']);

Route::get('/product/checkout', [TemplateController::class, 'checkout']);

// <<<<<<< Updated upstream

// Route::get('/product/checkout', function(){
//     return view('products.notcheckout');
// });
// =======
Route::get('/product/order', [TemplateController::class, 'product_order']);

// >>>>>>> Stashed changes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









Route::post( "/product/get_subC",[ProductsController::class, 'Get_SubCategory'])->name('/product/get_subC');