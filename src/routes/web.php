<?php 

Route::group(['namespace'=>'Tuhin\SendMail\Http\Controllers'],function(){
    Route::get('/sendmail','SendMailController@index');
    Route::post('/send','SendMailController@send')->name('send');
});