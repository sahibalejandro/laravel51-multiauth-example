<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * User section
 */
Route::group(array('prefix' => 'user'), function(){

    //Unauthenticated routes
    Route::get('login', array('uses' => 'Auth\UserAuthController@getLogin'));
    Route::post('login', array('uses' => 'Auth\UserAuthController@postLogin'));

    //Authenticated routes
    Route::group(array('middleware' => 'auth.user'), function(){
        Route::get('/home', array('as' => 'user.home', 'uses' => 'UserHomeController@index'));
        Route::get('/logout', array('as' => 'user.logout', 'uses' => 'Auth\UserAuthController@getLogout'));
    });
});

/*
 * Admin section
 */
Route::group(['prefix' => 'admin'], function(){

    //Unauthenticated routes
    Route::get('login', array('uses' => 'Auth\AdminAuthController@getLogin'));
    Route::post('login', array('uses' => 'Auth\AdminAuthController@postLogin'));

    //Authenticated routes
    Route::group(array('middleware' => 'auth.admin'), function(){
        Route::get('/home', array('as' => 'admin.home', 'uses' => 'AdminHomeController@index'));
        Route::get('/logout', array('as' =>'admin.logout', 'uses' => 'Auth\AdminAuthController@getLogout'));
    });

});
