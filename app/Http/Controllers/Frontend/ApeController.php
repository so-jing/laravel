<?php
/**
 * createTime: 2017/11/29 0006 下午 19:03
 */
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ApeController extends Controller
{
    //前台猿问
    public function index()
    {
       return view('frontend.ape.ape');
    }


}