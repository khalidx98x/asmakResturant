<?php

Route::get('/user/asmak', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();

    //dd($users);

    return view('user.home');
    
})->name('home');


Route::group(['prefix' => 'asmak'], function () {

  Route::get('/', ['as' => 'asmak.index', 'uses' => 'frontEndController@index']);
  Route::get('/showFloor/{floor_id}', ['as' => 'asmak.show', 'uses' => 'frontEndController@show']);
  
  Route::post('/book/{floor}/{table}', ['as' => 'asmak.book', 'uses' => 'frontEndController@book']);
  Route::post('/endBook/{floor}/{table}', ['as' => 'asmak.endBook', 'uses' => 'frontEndController@endBook']);
  Route::post('/cancelBook/{floor}/{table}', ['as' => 'asmak.cancelBook', 'uses' => 'frontEndController@cancelBook']);

  });
