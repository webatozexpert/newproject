<?php

use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Frontend\FrontendController@index')->name('home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'],function(){

Route::prefix('users')->group(function(){
    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
});
Route::prefix('profiles')->group(function(){
    Route::get('/view', 'Backend\profileController@view')->name('profile.view');
    Route::get('/edit', 'Backend\profileController@edit')->name('profile.edit');
    Route::post('/store', 'Backend\profileController@update')->name('profile.update');
    Route::get('/password/view', 'Backend\profileController@passwordView')->name('profile.password.view');
    Route::post('/password/update', 'Backend\profileController@passwordUpdate')->name('profile.password.update');
    
});

Route::prefix('suppliers')->group(function(){
    Route::get('/view', 'Backend\SupplierController@view')->name('suppliers.view');
    Route::get('/add', 'Backend\SupplierController@add')->name('suppliers.add');
    Route::post('/store', 'Backend\SupplierController@store')->name('suppliers.store');
    Route::get('/edit/{id}', 'Backend\SupplierController@edit')->name('suppliers.edit');
    Route::post('/update/{id}', 'Backend\SupplierController@update')->name('suppliers.update');
    Route::get('/delete/{id}', 'Backend\SupplierController@delete')->name('suppliers.delete');
});
Route::prefix('customers')->group(function(){
    Route::get('/view', 'Backend\CustomerController@view')->name('customers.view');
    Route::get('/add', 'Backend\CustomerController@add')->name('customers.add');
    Route::post('/store', 'Backend\CustomerController@store')->name('customers.store');
    Route::get('/edit/{id}', 'Backend\CustomerController@edit')->name('customers.edit');
    Route::post('/update/{id}', 'Backend\CustomerController@update')->name('customers.update');
    Route::get('/delete/{id}', 'Backend\CustomerController@delete')->name('customers.delete');
});


Route::prefix('units')->group(function(){
    Route::get('/view', 'Backend\UnitController@view')->name('units.view');
    Route::get('/add', 'Backend\UnitController@add')->name('units.add');
    Route::post('/store', 'Backend\UnitController@store')->name('units.store');
    Route::get('/edit/{id}', 'Backend\UnitController@edit')->name('units.edit');
    Route::post('/update/{id}', 'Backend\UnitController@update')->name('units.update');
    Route::get('/delete/{id}', 'Backend\UnitController@delete')->name('units.delete');
});

Route::prefix('categories')->group(function(){
    Route::get('/view', 'Backend\CategoryController@view')->name('categories.view');
    Route::get('/add', 'Backend\CategoryController@add')->name('categories.add');
    Route::post('/store', 'Backend\CategoryController@store')->name('categories.store');
    Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('categories.edit');
    Route::post('/update/{id}', 'Backend\CategoryController@update')->name('categories.update');
    Route::get('/delete/{id}', 'Backend\CategoryController@delete')->name('categories.delete');
});

Route::prefix('products')->group(function(){
    Route::get('/view', 'Backend\ProductController@view')->name('products.view');
    Route::get('/add', 'Backend\ProductController@add')->name('products.add');
    Route::post('/store', 'Backend\ProductController@store')->name('products.store');
    Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('products.edit');
    Route::post('/update/{id}', 'Backend\ProductController@update')->name('products.update');
    Route::get('/delete/{id}', 'Backend\ProductController@delete')->name('products.delete');
});
Route::prefix('purchase')->group(function(){
    Route::get('/view', 'Backend\PurchaseController@view')->name('purchase.view');
    Route::get('/add', 'Backend\PurchaseController@add')->name('purchase.add');
    Route::post('/store', 'Backend\PurchaseController@store')->name('purchase.store');
    Route::get('/edit/{id}', 'Backend\PurchaseController@edit')->name('purchase.edit');
    Route::post('/update/{id}', 'Backend\PurchaseController@update')->name('purchase.update');
    Route::get('/delete/{id}', 'Backend\PurchaseController@delete')->name('purchase.delete');
});



Route::prefix('divisions')->group(function(){
    Route::get('/view', 'Backend\DivisionController@view')->name('divisions.view');
    Route::get('/add', 'Backend\DivisionController@add')->name('divisions.add');
    Route::post('/store', 'Backend\DivisionController@store')->name('divisions.store');
    Route::get('/edit/{id}', 'Backend\DivisionController@edit')->name('divisions.edit');
    Route::post('/update/{id}', 'Backend\DivisionController@update')->name('divisions.update');
    Route::get('/delete/{id}', 'Backend\DivisionController@delete')->name('divisions.delete');
});

Route::prefix('districts')->group(function(){
    Route::get('/view', 'Backend\DistrictController@view')->name('districts.view');
    Route::get('/add', 'Backend\DistrictController@add')->name('districts.add');
    Route::post('/store', 'Backend\DistrictController@store')->name('districts.store');
    Route::get('/edit/{id}', 'Backend\DistrictController@edit')->name('districts.edit');
    Route::post('/update/{id}', 'Backend\DistrictController@update')->name('districts.update');
    Route::get('/delete/{id}', 'Backend\DistrictController@delete')->name('districts.delete');
});

Route::prefix('upazilas')->group(function(){
    Route::get('/view', 'Backend\UpazilaController@view')->name('upazilas.view');
    Route::get('/add', 'Backend\UpazilaController@add')->name('upazilas.add');
    Route::post('/store', 'Backend\UpazilaController@store')->name('upazilas.store');
    Route::get('/edit/{id}', 'Backend\UpazilaController@edit')->name('upazilas.edit');
    Route::post('/update/{id}', 'Backend\UpazilaController@update')->name('upazilas.update');
    Route::get('/delete/{id}', 'Backend\UpazilaController@delete')->name('upazilas.delete');
});



Route::prefix('unions')->group(function(){
    Route::get('/view', 'Backend\UnionController@view')->name('unions.view');
    Route::get('/add', 'Backend\UnionController@add')->name('unions.add');
    Route::post('/store', 'Backend\UnionController@store')->name('unions.store');
    Route::get('/edit/{id}', 'Backend\UnionController@edit')->name('unions.edit');
    Route::post('/update/{id}', 'Backend\UnionController@update')->name('unions.update');
    Route::get('/delete/{id}', 'Backend\UnionController@delete')->name('unions.delete');
});

Route::prefix('wards')->group(function(){
    Route::get('/view', 'Backend\WardController@view')->name('wards.view');
    Route::get('/add', 'Backend\WardController@add')->name('wards.add');
    Route::post('/store', 'Backend\WardController@store')->name('wards.store');
    Route::get('/edit/{id}', 'Backend\WardController@edit')->name('wards.edit');
    Route::post('/update/{id}', 'Backend\WardController@update')->name('wards.update');
    Route::get('/delete/{id}', 'Backend\WardController@delete')->name('wards.delete');
});

Route::prefix('villages')->group(function(){
    Route::get('/view', 'Backend\villageController@view')->name('villages.view');
    Route::get('/add', 'Backend\villageController@add')->name('villages.add');
    Route::post('/store', 'Backend\villageController@store')->name('villages.store');
    Route::get('/edit/{id}', 'Backend\villageController@edit')->name('villages.edit');
    Route::post('/update/{id}', 'Backend\villageController@update')->name('villages.update');
    Route::get('/delete/{id}', 'Backend\villageController@delete')->name('villages.delete');
});
Route::get('/get-district', 'Backend\DefaultController@getDistrict')->name('default-get-district');
Route::get('/get-upazila', 'Backend\DefaultController@getUpazila')->name('default-get-upazila');
Route::get('/get-union', 'Backend\DefaultController@getUnion')->name('default-get-union');
Route::get('/get-wardNo', 'Backend\DefaultController@getWardNo')->name('default-get-wardNo');

});