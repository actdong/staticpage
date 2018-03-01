@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <form id="bangform" method="post" target="_self" action="https://smrtyan.me/ali_pay/pagepay/pagepay.php">
                 {{ csrf_field() }}
                 <input type="hidden" class="form-control" name="WIDout_trade_no" value="{{ $out_trade_no }}" required>
                 <input type="hidden" class="form-control" name="WIDsubject" value="{{ $subject }}" required>
                 <input type="hidden" class="form-control" name="WIDtotal_amount" value="{{ $total_amount }}" required>
                 <input type="hidden" class="form-control" name="WIDbody">
              </form>
              <div class="panel-heading text-center" >
                <div class="col-md-8 col-sm-offset-2 text-center">
                </div>
              </div>
              <div class="panel-body">
                <div class="col-md-8 col-sm-offset-2 text-center">
                  <img alt="刷新中" src="/img/webwxgetmsgimg.gif"/>
                </div>
              </div>
          </div>
      </div>
   </div>
</div>
@endsection

