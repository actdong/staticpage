<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact.contact');
    }

    public function chengshihehuoren()
    {
        return view('contact.chengshihehuoren');
    }

    public function zhaoxiannashi()
    {
        return view('contact.zhaoxiannashi');
    }
}
