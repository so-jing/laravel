<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/11/29
 * Time: 9:15
 * 后台
 */
//首页
Route::get('/', ['uses' => 'BackendController@index']);   //入口路径
Route::get('index', ['uses' => 'BackendController@index']);    //首页
//用户
Route::get('blank', ['uses' => 'UserController@blank']);    //空白页
Route::get('login', ['uses' => 'UserController@login']);    //登录
Route::get('lock', ['uses' => 'UserController@lock']);    //锁屏
Route::get('logout', ['uses' => 'UserController@logout']);    //锁屏


//猿问
Route::get('ape/ape', ['uses' => 'ApeController@ape']);    //主页

Route::any('ape/status', ['uses' => 'ApeController@status']);    //修改状态

Route::any('ape/question', ['uses' => 'ApeController@question']);    //状态启用禁用

Route::any('ape/delete', ['uses' => 'ApeController@delete']);    //删除猿问

Route::get('ape/reply/{id}', ['uses' => 'ApeController@reply']);    //内容评论

Route::any('ape/reply/amputate', ['uses' => 'ApeController@amputate']);    //删除回复信息


