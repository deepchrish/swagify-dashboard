<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application.
| All API routes with their action handlers under prefix "api/v1"
|
*/

Route::prefix('v1')->group(function () {
   
    Route::namespace('API')->group(function () {
        // Brand Routes
        Route::apiResource('brands', 'BrandController');
    });

});


/**
 * Handle 404 Routes
 */
Route::fallback(function(){
    return response()->json(['message' => 'Not Found.'], 404);
});