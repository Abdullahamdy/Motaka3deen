<?php

use Illuminate\Support\Facades\Route;

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





Route::get('/clear-cache', function () {

    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');

    //  return \App\Models\Seller::all();
    return 'done';
});

Route::group(['namespace'=>'frontend','middleware'=>'auth:client'],function(){
Route::get('/','HomeController@index')->name('main');
    Route::get('who-are','WhoAreController@index')->name('who-are');
    Route::get('servecs','ServeceController@index')->name('servecs');
    Route::get('show-more/{id}','ServeceController@showmore')->name('show-more');
    Route::get('gallary-photo','GallaryController@image')->name('gallary-photo');
    Route::get('gallary-video','GallaryController@video')->name('gallary-video');
   

    Route::get('contact-us','ContactUsController@getForm')->name('contact-us');
    Route::post('contact-us','ContactUsController@subForm')->name('contact-us');
    Route::get('question','QuestionController@index')->name('question');
    Route::get('terms','TermsController@index')->name('terms');
    Route::post('news-letter','NewsletterController@index')->name('news-letter');

});
Route::get('/client-register','frontend\clientloginController@getFormAccount')->name('client-register');
Route::post('/create-account','frontend\clientloginController@register')->name('create-account');
Route::get('/clientlogin', 'frontend\clientloginController@index')->name('clientlogin');
Route::post('/clientLogin', 'frontend\clientloginController@login')->name('clientLogin');
Route::post('/logout', 'frontend\clientloginController@logout')->name('logout');
Route::view('member','livewire.show-form');
Route::view('/home','frontend.authClient.login')->name('front.home');
