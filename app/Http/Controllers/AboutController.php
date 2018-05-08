<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about.about');
    }

    public function aixuebang()
    {
        return view('about.aixuebang');
    }

    public function gangyueaoyuwenjiaoyuyanjiuyuan()
    {
        return view('about.gangyueaoyuwenjiaoyuyanjiuyuan');
    }

    public function xianggangyinghuazazhishe()
    {
        return view('about.xianggangyinghuazazhishe');
    }

    public function zhonghuajichujiaoyuyanjiuyuan()
    {
        return view('about.zhonghuajichujiaoyuyanjiuyuan');
    }

}
