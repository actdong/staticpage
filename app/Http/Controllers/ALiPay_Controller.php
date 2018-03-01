<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class ALiPay_Controller extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function saveTranctionPara(Request $request)
    {

        if ($request->paymethod != "支付宝") {
          return ;
        }

        $default_trade_no = date('YmdHis') . mt_rand(1000, 9999);
        $total_amount = $request->amount;
        $subject = $request->product_subject;

        $test="";

        $result = Cache::add(Auth::user()->id . 'WIDout_trade_no', $default_trade_no, 1);
        $test .= $result;
        $result = Cache::add(Auth::user()->id . 'WIDsubject', $subject, 1);
        $test .= $result;
        $result = Cache::add(Auth::user()->id . 'WIDtotal_amount', $total_amount, 1);
        $test .= $result;


        // $request->session()->flash('WIDout_trade_no', $default_trade_no);
        // $request->session()->flash('WIDsubject', $subject);
        // $request->session()->flash('WIDtotal_amount', $total_amount);
        // session(['WIDout_trade_no' => $default_trade_no]);
        // session(['WIDsubject' => $subject]);
        // session(['WIDtotal_amount' => $total_amount]);

        // $request->session()->put('WIDout_trade_no', $default_trade_no);
        // $request->session()->put('WIDsubject', $subject);
        // $request->session()->put('WIDtotal_amount', $total_amount);
        //
        // $request->session()->keep(['WIDout_trade_no', 'WIDsubject', 'WIDtotal_amount']);

        // if ($request->session()->exists('WIDout_trade_no')) {
        //    $test .= $request->session()->get('WIDout_trade_no', NULL);
        // }
        // if ($request->session()->exists('WIDsubject')) {
        //    $test .= $request->session()->get('WIDsubject', NULL);
        // }
        // if ($request->session()->exists('WIDtotal_amount')) {
        //    $test .= $request->session()->get('WIDtotal_amount', NULL);
        // }


        return $test;
    }

    public function getTranctionPara(Request $request)
    {
        // $out_trade_no = $request->session()->get('WIDout_trade_no', NULL);
        // $subject = $request->session()->get('WIDsubject', NULL);
        // $total_amount = $request->session()->get('WIDtotal_amount', NULL);
       $out_trade_no = Cache::pull(Auth::user()->id . 'WIDout_trade_no');
       $subject = Cache::pull(Auth::user()->id . 'WIDsubject');
       $total_amount = Cache::pull(Auth::user()->id . 'WIDtotal_amount');

        // $out_trade_no = session('WIDout_trade_no', NULL);
        // $subject = session('WIDsubject', NULL);
        // $total_amount = session('WIDtotal_amount', NULL);

        if ($out_trade_no != NULL && $subject != NULL && $total_amount != NULL) {
            // $request->session()->forget('WIDout_trade_no');
            // $request->session()->forget('WIDsubject');
            // $request->session()->forget('WIDtotal_amount');
            return view('alipay.tradepage', ['out_trade_no' => urlencode($out_trade_no), 'subject' => urlencode($subject), 'total_amount' => urlencode($total_amount)]);
        } else {
            abort(404);
            // echo $out_trade_no . $subject . $total_amount;
        }
    }

    public function wait()
    {
        return view('ali_test');
    }
}

