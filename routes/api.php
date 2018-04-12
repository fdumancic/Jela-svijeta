<?php

use App\models\Meal;
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

Route::get('/meals', 'MealController@read');

Route::get('/delete/{id}', function($id) {
	Meal::find($id)->delete();
	return 'meal deleted';
});

Route::get('/restore/{id}', function($id) {
	Meal::withTrashed()->find($id)->restore();
	return 'meal restored';
});

