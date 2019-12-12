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

Route::get('/', function (Request $req) {
    if(session()->has('username')){
        if(session()->get('type')=='1')
            return redirect()->route('admin.index');
        else 
            return redirect()->route('customer.index');
    }
});


Route::get('/registration','RegistrationController@index');
Route::post('/registration','RegistrationController@store');

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');
Route::get('/logout','LogoutController@index');


Route::group(['middleware'=>['sess']], function(){

    Route::group(['middleware'=>['va']], function(){
        Route::get('/admin','AdminController@index')->name('admin.index');
        Route::get('/admin/viewprofile','AdminController@viewProfile')->name('admin.viewprofile');
        Route::get('/admin/addproduct','AdminController@addProduct')->name('admin.addproduct');
        Route::post('/admin/addproduct','AdminController@insertProduct');
        Route::get('/admin/updateproduct','AdminController@updateProduct')->name('admin.updateproduct');
        Route::post('/admin/updateproduct','AdminController@update');
        Route::get('/customer/deleteproduct','AdminController@deleteProduct')->name('admin.deleteproduct');
        Route::post('/customer/deleteproduct','AdminController@delete');
        Route::get('/customer/deletecustomer','AdminController@deleteCustomer')->name('admin.deletecustomer');
        Route::post('/customer/deletecustomer','AdminController@deleteC');
    });


    Route::group(['middleware'=>['vc']], function(){
        Route::get('/customer','CustomerController@index')->name('customer.index');
        Route::get('/customer/viewprofile','CustomerController@viewProfile')->name('customer.viewprofile');
        Route::get('/customer/updateprofile','CustomerController@updateProfile')->name('customer.updateprofile');
        Route::post('/customer/updateprofile','CustomerController@update');
      
    });
});
