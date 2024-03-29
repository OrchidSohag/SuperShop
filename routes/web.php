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
Route::get('/', function () {
    return view('SuperShopHomePage');
})->name('InventoryEntrance');

Route::get('/admin-register', function (){
    return view('Admin.register');
})->name('AdminRegister');
Route::post('adminRegister', 'AdminController@store')->name('AdminEnrolled');

Route::get('/admin-Login', function () {
    return view('Admin.login');
})->name('AdminLogin');
Route::post('adminLogin', 'AdminController@login')->name('AdminLoggedIn');

Auth::routes();
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('PasswordEmail');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('ResetPasswordSend');


Route::group(['middleware' => 'Revalidate'],function() {
Route::group(['middleware' => 'Authenticate'], function () {
    Route::get('admin-dashboard', function () {
        return view('Dashboard.main');
    })->name('AdminDashboard');

    Route::get('adminLogout', 'AdminController@logout')->name('AdminLogout');

    Route::get('customers-CRUD', 'CustomerController@crudButtons')->name('CustomerCRUD');
    Route::get('add-customer', function () {
        return view('Dashboard.Views.Customers.AddCustomer');
    })->name('AddCustomer');
    Route::post('add-customer', 'CustomerController@store')->name('AddCustomerC');
    Route::get('view-customers', 'CustomerController@show')->name('ViewCustomers');
    Route::post('search-customer', 'CustomerController@search')->name('SearchCustomer');
    Route::post('update-customer', 'CustomerController@updateForm')->name('UpdateCustomerForm');
    Route::post('update-customer/{id}', 'SaleController@update')->name('UpdateCustomer');
    Route::post('delete-customer', 'CustomerController@delete')->name('DeleteCustomer');

    Route::get('new-purchase', function () {
        return view('Dashboard.Views.Purchase.AddNewPurchase');
    })->name('AddPurchase');
    Route::post('new-purchase', 'PurchaseController@store')->name('AddPurchaseC');
    Route::get('view-purchases', 'PurchaseController@show')->name('ViewPurchase');
    Route::get('purchase-CRUD', 'PurchaseController@crudButtons')->name('PurchaseCRUD');
    Route::post('update-purchase', 'PurchaseController@updateForm')->name('UpdatePurchaseForm');
    Route::post('update-purchase/{id}', 'PurchaseController@update')->name('UpdatePurchase');
    Route::post('delete-purchase', 'PurchaseController@delete')->name('DeletePurchase');
    Route::post('search-purchase', 'PurchaseController@search')->name('SearchPurchase');

    Route::get('products-CRUD', 'ProductController@crudButtons')->name('ProductsCRUD');
    Route::get('store-products', 'ProductController@create')->name('StoreProducts');
    Route::post('store-products', 'ProductController@store')->name('StoreProductsC');
    Route::get('view-products', 'ProductController@show')->name('ViewProducts');
    Route::post('search-products', 'ProductController@search')->name('SearchProduct');
    Route::post('delete-product', 'ProductController@delete')->name('DeleteProduct');

    Route::get('sales-CRUD', 'SaleController@crudButtons')->name('SalesCRUD');
    Route::get('sell-products', 'SaleController@create')->name('SellProducts');
    Route::post('sell-products', 'SaleController@store')->name('SellProductsC');
    Route::get('view-sales', 'SaleController@show')->name('ViewSales');
    Route::post('search-sales', 'SaleController@search')->name('SearchSale');
    Route::post('update-sale', 'SaleController@updateForm')->name('UpdateSaleForm');
    Route::post('update-sale/{id}', 'SaleController@update')->name('SalesUpdate');
    Route::post('delete-sale', 'SaleController@delete')->name('DeleteSale');
});
});