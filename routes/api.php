<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


	Route::apiResource('user', 'UserController');
	Route::apiResource('role', 'RoleController');
	Route::apiResource('groupe', 'GroupeController');
	Route::apiResource('notification', 'NotificationController');
	Route::apiResource('share', 'ShareController');
	Route::apiResource('actuality', 'ActualityController');
	Route::apiResource('like', 'LikeController');
	Route::apiResource('media', 'MediaController');
	Route::apiResource('project', 'ProjectController');
	Route::apiResource('projecttype', 'ProjectTypeController');
	Route::apiResource('tag', 'TagController');
	Route::apiResource('payment', 'PaymentController');
	Route::apiResource('paymentgateway', 'PaymentGateWayController');
	Route::apiResource('projectdescription', 'ProjectDescriptionController');
	Route::apiResource('vote', 'VoteController');
	Route::apiResource('event', 'EventController');
	Route::apiResource('comment', 'CommentController');
	Route::apiResource('usergroup', 'UserGroupController');
	Route::apiResource('actualityshare', 'ActualityShareController');
	Route::apiResource('actualitytag', 'ActualityTagController');


  
