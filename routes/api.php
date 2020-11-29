<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//welcome test route
Route::get('/', function (Request $request) {
    return [
            'status' => true,
            'data' => [],
            'message' => 'welcome and api is working',
        ];
});

//create request route
Route::get('get_services', 'api\ServiceController@index');

//create request route
Route::post('create_request', 'api\RequestController@store');

//create request route
Route::post('vendor/get_requests', 'api\VendorController@requests');


