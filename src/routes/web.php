
<?php
Route::group(['namespace' => 'PHPMiura\Auth\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('auth', 'AuthController@index');
    Route::post('auth', 'AuthController@sendMail')->name('auth');
});
