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

Route::group(['prefix'=> 'v1','namespace'=>'API'],function(){
    Route::apiResource('appraisers','AppraiserController',['only'=>['index','show']]);
    Route::apiResource('staff','StaffController',['only'=>['index','show']]);
  
    Route::apiResource('skillcategories','Skill_CatController',['except'=>['create','edit']]);
    Route::apiResource('ratings','RatingController',['except'=>['create','edit']]);
    Route::apiResource('departments','DepartmentController',['only'=>['index','show']]);
    Route::apiResource('skills','SkillsController',['only'=>['index','show']]);
    Route::apiResource('skillentries','SkillEntryController',['except'=>['create','edit']]);
  
  });
  
