<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class WeChatNativeController extends Controller
{
    //

    private $config = [
        'app_id' => 'wx37316f798a3bd75c',
        'mch_id' => '1229466802',
        'api_key' => '20180110aixuebang20180110aixueba',

    ];

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    //
    public function native_pay(Request $request)
    {

         if ($request->paymethod != "微信支付") {
             return ;
         }
         
        $gateway    = Omnipay::create('WechatPay_Native');
        $gateway->setAppId($this->config['app_id']);
        $gateway->setMchId($this->config['mch_id']);
        $gateway->setApiKey($this->config['api_key']);

        $actual_amount = $request->amount * 100;
        $actual_product_id = $request->product_id;
        $actual_body = $request->product_subject;
    //    $gateway->setBody($actual_body);
        $order = [
            'body'              => $actual_body,
            'out_trade_no'      => date('YmdHis').mt_rand(1000, 9999),
            'total_fee'         => $actual_amount, //=0.01
            'spbill_create_ip'  => $this->getIPAddr(),
            'fee_type'          => 'CNY',
            'notify_url'        => 'https://smrtyan.me/wechat_notify'
        ];

	/**
	 * @var Omnipay\WechatPay\Message\CreateOrderRequest $request
	 * @var Omnipay\WechatPay\Message\CreateOrderResponse $response
	 */
	$myrequest  = $gateway->purchase($order);
	$response = $myrequest->send();

	//available methods
	if ($response->isSuccessful()) {
	//$response->getData(); //For debug
	//$response->getAppOrderData(); //For WechatPay_App
	//$response->getJsOrderData(); //For WechatPay_Js
	    return $response->getCodeUrl(); //For Native Trade Type
        }


        return "Failed";
    }

    /**
     * Get the Client IP Address.
     *
     * @return mixed
     */
    private function getIPAddr()
    {
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
             $ip = getenv("HTTP_CLIENT_IP");
        } else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
             $ip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
             $ip = getenv("REMOTE_ADDR");
        } else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
             $ip = $_SERVER['REMOTE_ADDR'];
        } else {
             $ip = "unknown";
        }
        return $ip;
    }

    public function notify_me()
    {
        $gateway    = Omnipay::create('WechatPay');
	$gateway->setAppId($this->config['app_id']);
	$gateway->setMchId($this->config['mch_id']);
	$gateway->setApiKey($this->config['api_key']);

	$response = $gateway->completePurchase([
	    'request_params' => file_get_contents('php://input')
	])->send();

	if ($response->isPaid()) {
		//pay success
	     //   var_dump($response->getRequestData());
	    
	} else {
	    //pay fail
	}
   

    }


    public function generate_qr(Request $request)
    {
        if ($request->paymethod == "微信支付") {
            // Cache::put('threeminute', $request->codeurl, 3);
            Cache::add(Auth::user()->id . 'wechat_url', $request->codeurl, 1);
            // Cache::forever('threeminute', $request->codeurl);
            return "succeed!";
        } else {
            $arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
            return json_encode($arr);
            // return view('ali_pay_page');
            # code...
        }

    }

    public function qr_pay()
    {
        // $codeurl = Cache::get('threeminute');
        $codeurl = Cache::pull(Auth::user()->id . 'wechat_url');
        if ( $codeurl == NULL) {
          abort(404);
        } else {
              // Cache::forget('threeminute');
              // session(['url_session' => urlencode($codeurl)]);
          // return redirect('actual_pay_page')->with('url_session', urlencode($codeurl));
              // return view('wechat.qrcode');
              return view('wechat.qrcode')->with('url_session', urlencode($codeurl));
        }

        // return $codeurl;
    }
    // public function qr_pay(Request $request)
    // {
    //   $value = "success";
    //   return $value;
    // }

    // public function scan_page()
    // {
    //   return view('wechat.qrcode');
    // }


    public function test()
    {
        return view('qr_test');
    }


}


