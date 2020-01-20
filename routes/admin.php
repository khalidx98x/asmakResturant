<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.index');
})->name('home');



Route::get('lang/{lang}', function ($lang) {
    session()->has('lang') ? session()->forget('lang') : '';
    $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'ar');
    return back();
});

Route::group(['prefix' => 'admins'], function () {

    Route::post('/update/{id}', ['as' => 'admins.update', 'uses' => 'AdminController@update']);

});




Route::group(['prefix' => 'receptionists'], function () {

    Route::get('/', ['as' => 'receptionists.index', 'uses' => 'ReceptionistController@index']);
    Route::get('/create', ['as' => 'receptionists.create', 'uses' => 'ReceptionistController@create']);
    Route::post('/store', ['as' => 'receptionists.store', 'uses' => 'ReceptionistController@store']);
    // Route::get('/edit', ['as' => 'floorManagers.edit', 'uses' => 'FloorManagersController@edit']);
    Route::post('/update/{id}', ['as' => 'receptionists.update', 'uses' => 'ReceptionistController@update']);
    Route::post('/destroy/{id}', ['as' => 'receptionists.destroy', 'uses' => 'ReceptionistController@destroy']);
});
 


Route::group(['prefix' => 'floorManagers'], function () {

    Route::get('/', ['as' => 'floorManagers.index', 'uses' => 'FloorManagersController@index']);
    Route::get('/create', ['as' => 'floorManagers.create', 'uses' => 'FloorManagersController@create']);
    Route::post('/store', ['as' => 'floorManagers.store', 'uses' => 'FloorManagersController@store']);
    // Route::get('/edit', ['as' => 'floorManagers.edit', 'uses' => 'FloorManagersController@edit']);
    Route::post('/update/{id}', ['as' => 'floorManagers.update', 'uses' => 'FloorManagersController@update']);
    Route::post('/destroy/{id}', ['as' => 'floorManagers.destroy', 'uses' => 'FloorManagersController@destroy']);
});


Route::group(['prefix' => 'floors'], function () {

    Route::get('/', ['as' => 'floors.index', 'uses' => 'FloorsController@index']);
    Route::get('/create', ['as' => 'floors.create', 'uses' => 'FloorsController@create']);
    Route::post('/store', ['as' => 'floors.store', 'uses' => 'FloorsController@store']);
    // Route::get('/edit', ['as' => 'floors.edit', 'uses' => 'FloorsController@edit']);
    Route::post('/update/{id}', ['as' => 'floors.update', 'uses' => 'FloorsController@update']);

    Route::post('/destroy/{id}', ['as' => 'floors.destroy', 'uses' => 'FloorsController@destroy']);
});


Route::group(['prefix' => 'tables'], function () {

    Route::get('/', ['as' => 'tables.index', 'uses' => 'TablesController@index']);
    Route::get('/create', ['as' => 'tables.create', 'uses' => 'TablesController@create']);
    Route::post('/store', ['as' => 'tables.store', 'uses' => 'TablesController@store']);
    Route::post('/destroy/{id}', ['as' => 'tables.destroy', 'uses' => 'TablesController@destroy']);
});
