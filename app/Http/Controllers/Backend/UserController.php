<?php
/**
 * createTime: 2017/11/29 0006 下午 19:03
 * 管理员
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //空白页
    public function blank()
    {
        return view('backend.user.blank');
    }
    //后台用户登录
    public function login()
    {
        return view('backend.user.login');
    }

    //锁用户
    public function lock()
    {
        return view('backend.user.lock_screen');
    }

    //登出
    public function logout()
    {
        return redirect('login');
    }


}