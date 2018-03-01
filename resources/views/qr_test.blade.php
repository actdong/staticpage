@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <form id="bangform" method="post" target="_self" action="{{ route('scan_and_pay') }}">
                 {{ csrf_field() }}
              </form>
              <div class="panel-heading text-center" >
                <div class="col-md-8 col-sm-offset-2 text-center">
                  <!-- <p></p>
                  <strong style="color:#00FF00">正在加载支付页面，请稍候！</strong>
                  <p></p> -->
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

