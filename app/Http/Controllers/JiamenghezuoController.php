<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JiamenghezuoController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function jiamenghezuo()
    {
        return view('jiamenghezuo.jiamenghezuo');
    }
}
