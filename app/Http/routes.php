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
Route::get('/', function () {
    return view('landing');
});
*/
Route::get('/', 'PageController@index');


// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Authenticated User Routes
// LESSON
Route::get('lesson', ['middleware'=>['auth','isMember'],'uses'=>'LessonController@getLessonIndex']);
Route::get('lesson/{id}',['middleware'=>['auth','isMember'],'uses'=>'LessonController@getLesson']);

// Admin Routes
// USER
Route::get('user',['middleware'=>['auth','isAdmin'],'uses'=>'UserController@getIndex']);
Route::get('editUser/{id}',['middleware'=>['auth','isAdmin'],'uses'=> 'UserController@getUser']);
Route::post('editUser/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'UserController@editUser']);
Route::get('deleteUser/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'UserController@deleteUser']);
Route::get('setMember/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'UserController@setMember']);
Route::get('cancelMember/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'UserController@cancelMember']);
// LESSON
Route::get('lessonAdmin',['middleware'=>['auth','isAdmin'],'uses'=>'LessonController@getLessonAdminIndex']);
Route::get('editLesson/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'LessonController@getLessonInfo']);
Route::post('editLesson/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'LessonController@editLesson']);
Route::post('createLesson',['middleware'=>['auth','isAdmin'],'uses'=>'LessonController@createLesson']);
Route::get('deleteLesson/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'LessonController@deleteLesson']);
// EMAIL
// 
//Route::get('launchEmail','PageController@launchEmail');
//Payment
Route::get('paypalPaymentSuccess','PaymentController@paypalPaymentSuccess');
Route::get('createPayment',['middleware'=>['auth'],'uses'=>'PaymentController@getReportPaymentForm']);
Route::post('createPayment',['middleware'=>['auth'],'uses'=>'PaymentController@createPayment']);
Route::get('showPayments',['middleware'=>['auth','isAdmin'],'uses'=>'PaymentController@getPaymentIndex']);
Route::get('showPayments/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'PaymentController@getPaymentDetail']);
Route::get('deletePayment/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'PaymentController@deletePayment']);
Route::get('checkedPayment/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'PaymentController@checkedPayment']);
Route::get('uncheckedPayment/{id}',['middleware'=>['auth','isAdmin'],'uses'=>'PaymentController@uncheckedPayment']);
