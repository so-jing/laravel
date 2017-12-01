<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/11/29
 * Time: 9:16
 * 前台
 */

//Route::get('frontend','FrontendController@index');



Route::any('/',['uses'=>'IndexController@index']);

Route::any('index',['uses'=>'IndexController@index']);
Route::get('ape',['uses'=>'ApeController@index']);
Route::get('combat',['uses'=>'CombatController@index']);
Route::get('free',['uses'=>'FreeController@index']);
Route::get('note',['uses'=>'NoteController@index']);
Route::get('path',['uses'=>'PathController@index']);