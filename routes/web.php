<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/list');
})->name('bangshop');
/*Route::get('admin', function () {
    return redirect('/admin/default/jqadm/search/dashboard?lang=zh_CN');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/paybywechat', 'WeChatNativeController@native_pay')->name('payit');
Route::post('/scantopay', 'WeChatNativeController@qr_pay')->name('scan_and_pay');
Route::post('/gereratewepay', 'WeChatNativeController@generate_qr')->name('generateQR');

Route::post('/wechat_notify', 'WeChatNativeController@notify_me')->name('wechat_notify');


Route::get('/readytopay', 'WeChatNativeController@test')->name('testit');
Route::get('/pleasepayit', 'WeChatNativeController@scan_page')->name('actual_pay_page');

// Route::get('/payimage', 'PHP_QR_CODER_Controller@png_code')->name('png_draw');
Route::get('/loading_ali', 'ALiPay_Controller@wait')->name('wait_alit');
Route::post('/prepareAlipay', 'ALiPay_Controller@saveTranctionPara')->name('prepareAli');
Route::post('/communicateAlipay', 'ALiPay_Controller@getTranctionPara')->name('callAli');

Route::get('/vaptcha_init', 'VaptchaController@getVaptcha')->name('init_vap');
Route::get('/vaptcha_downmode', 'VaptchaController@getDowTime')->name('vap_down');
Route::post('/vapcha_login', 'VaptchaController@vaptchaLogin')->name('safe_login');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//index
Route::get('/index', 'IndexController@index')->name('index');

//about
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/aixuebang', 'AboutController@aixuebang')->name('aixuebang');
Route::get('/gangyueaoyuwenjiaoyuyanjiuyuan', 'AboutController@gangyueaoyuwenjiaoyuyanjiuyuan')->name('gangyueaoyuwenjiaoyuyanjiuyuan');
Route::get('/xianggangyinghuazazhishe', 'AboutController@xianggangyinghuazazhishe')->name('xianggangyinghuazazhishe');
Route::get('/zhonghuajichujiaoyuyanjiuyuan', 'AboutController@zhonghuajichujiaoyuyanjiuyuan')->name('zhonghuajichujiaoyuyanjiuyuan');

//gongyi
Route::get('/gongyi', 'GongyiController@gongyi')->name('gongyi');
Route::get('/langdujia', 'GongyiController@langdujia')->name('langdujia');
Route::get('/piaoliuping', 'GongyiController@piaoliuping')->name('piaoliuping');
Route::get('/qianxiaobairijingdiansongdu', 'GongyiController@qianxiaobairijingdiansongdu')->name('qianxiaobairijingdiansongdu');
Route::get('/zhengwen', 'GongyiController@zhengwen')->name('zhengwen');

//contact
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/chengshihehuoren', 'ContactController@chengshihehuoren')->name('chengshihehuoren');
Route::get('/zhaoxiannashi', 'ContactController@zhaoxiannashi')->name('zhaoxiannashi');

//jiamenghezuo
Route::get('/jiamenghezuo', 'jiamenghezuoController@jiamenghezuo')->name('jiamenghezuo');