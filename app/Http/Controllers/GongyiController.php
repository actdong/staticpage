<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GongyiController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gongyi()
    {
        return view('gongyi.gongyi');
    }

    public function langdujia()
    {
        return view('gongyi.langdujia');
    }

    public function piaoliuping()
    {
        return view('gongyi.piaoliuping');
    }

    public function qianxiaobairijingdiansongdu()
    {
        return view('gongyi.qianxiaobairijingdiansongdu');
    }

    public function zhengwen()
    {
        return view('gongyi.zhengwen');
    }
}
