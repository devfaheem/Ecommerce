<?php

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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('home.index');
// });
// Route::get('test', function(){
// 	return App\User::with('orders')->get();
// }); 


Route::get('/chckout', 'CartController@chckout') ;


 Route::get('/', 'HomeController@index'); 


/*----- Admin Routes ---*/
Auth::routes();

Route::match(['get','post'],'/admin', 'AdminController@index')->name('admin.login');

Route::match(['get','post'],'/admin/login', 'AdminController@index')->name('admin.login'); 

Route::match(['get','post'],'/admin/logout', 'AdminController@logout')->name('admin.logout'); 

Route::get('/admin/dashboard', 'DashboardController@index')->name('admin.dashboard');

// Admin Product Category 
Route::get('/admin/productcategory', 'ProductCategoryController@index')->name('admin.productcategory');

Route::post('/admin/productcategory', 'ProductCategoryController@store')->name('productcategory.store');

Route::get('/admin/productcategory/{id}/edit', 'ProductCategoryController@edit')->name('productcategory.edit');

Route::put('/admin/productcategory/{id}', 'ProductCategoryController@update')->name('productcategory.update');


Route::delete('/admin/productcategory/{id}/delete', 'ProductCategoryController@destroy')->name('productcategory.destroy'); 

Route::get('/admin/productcategory/create', 'ProductCategoryController@create')->name('admin.productcategory.create');

// Admin Product Category 

Route::get('/admin/brands', 'BrandController@index')->name('admin.brand');

Route::get('/admin/brands/create', 'BrandController@create')->name('admin.brand.create');
Route::post('/admin/brands', 'BrandController@store')->name('brand.store');

Route::get('/admin/brands/{id}/edit', 'BrandController@edit')->name('brand.edit');

Route::put('/admin/brands/{id}', 'BrandController@update')->name('brand.update');
 
Route::delete('/admin/brands/{id}/delete', 'BrandController@destroy')->name('brand.destroy'); 



Route::get('/admin/products', 'ProductController@index')->name('admin.product');

Route::get('/admin/products/create', 'ProductController@create')->name('admin.product.create');

Route::post('/admin/products/store', 'ProductController@store')->name('admin.product.store');

Route::get('/admin/products/{id}/edit', 'ProductController@edit')->name('product.edit');

Route::put('/admin/products/{id}', 'ProductController@update')->name('product.update');

Route::delete('/admin/products/{id}/delete', 'ProductController@destroy')->name('product.destroy'); 



Route::get('/admin/customers', 'CustomerController@index')->name('admin.customer');

Route::get('/admin/customers/create', 'CustomerController@create')->name('admin.customer.create');


Route::get('/admin/orders', 'OrderController@index')->name('admin.order');


/*----- Home Routes ---*/

Route::get('/home/register', 'RegistrationController@create')->name('home.register');

Route::post('/register', 'RegistrationController@store');

Route::namespace('Auth')->group(function () {
Route::get('/logout', 'LoginController@logout');


Route::match(['get','post'],'/login', 'LoginController@index')->name('home.login');

// Route::get('/login', 'LoginController@index')->name('home.login');

// Route::post('/login', 'LoginController@store')->name('loginstore');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/productdetails/{id}', 'ProductDetailsController@viewDetails');

Route::post('/products/cart-add', 'CartController@addTocart')->name('carts');

Route::get('/products/cart-show', 'CartController@cartShow')->name('showcart') ;

Route::get('/products/checkout', 'CartController@checkout')->name('checkout') ;

Route::post('/products/update-cart', 'CartController@updateCart');
 
Route::get('/products/delete-cart-product/{rowId}', 'CartController@removeCartproduct'); 





