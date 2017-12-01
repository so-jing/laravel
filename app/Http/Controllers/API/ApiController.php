<?php
/**
 * createTime: 2017/11/29 0006 下午 19:03
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    //API路由
    public function index()
    {
        return 'api';
//        return view('api.index.index');
    }


}