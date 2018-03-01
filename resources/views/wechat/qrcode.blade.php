@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center" >
                  <p>^_^ 请使用微信扫一扫支付 ^_^</p>
                  <p style="color:#FF0000 !important">系统将在稍后自动生成预支付订单，为避免出现二维码失效，请您在两个小时内完成支付，谢谢合作！</p>
                </div>
                <div class="panel-body">
                  <div class="col-md-8 col-sm-offset-2 text-center">

                    <img alt="模式二扫码支付" src="https://smrtyan.me/example/qrcode.php?data={{ $url_session }}"/>

                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

