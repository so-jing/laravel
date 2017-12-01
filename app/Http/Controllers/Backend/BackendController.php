<?php
/**
 * createTime: 2017/11/29 0006 下午 19:03
 * 后台首页
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    //后台首页
    public function index()
    {
        return view('backend/index/index');
    }


}