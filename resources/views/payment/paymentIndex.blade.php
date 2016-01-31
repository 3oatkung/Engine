@extends('layouts.app')

@section('title')
    eXvertise - มาสร้างธุรกิจไปพร้อมกับเรา
@endsection

@section('content')
        <!-- Loader -->

        <!-- Top content -->
        <div class="top-content" >
            
            <!-- Top menu -->
            <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Marco - Bootstrap Landing Page</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="" href="{{url()}}">หน้าหลัก</a></li>
                                <li><a class="" href="{{url()}}/lessonAdmin">รายชื่อบทเรียน</a></li>
                                <li><a class="" href="{{url()}}/user">รายชื่อสมาชิก</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
             <div class="inner-bg" style="padding-top:0px;">
           
                <div class="container" style="padding-top:0px;">
                    <div class="row" style="padding-top:0px;">
                        <div class="col-sm-8 col-sm-offset-2 text wow fadeInDown" style="padding-top:20px;">
                            <h1>บริหารสมาชิก</h1>
                            <div class="description">
                            	<p>
	                            	จัดการบริหารการชำระเงิน
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
		    				<table style="color:white; margin-left: auto;
    margin-right: auto;">
								<tr style="border:1px solid #FFFFFF;">
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">ชื่อ</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">อีเมลล์</th>
                                    <th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">จำนวนเงิน</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">วันที่ชำระเงิน</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">เวลาที่ชำระเงิน</th>
                                    <th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">วิธีการชำระเงิน</th>
                                    <th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">สถานะการตรวจสอบ</th>
                                    <th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">ลบการชำระเงิน</th>
								</tr>

								@foreach ($payments as $payment)
								<tr>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$payment->name}}</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$payment->email}}</th>
                                    <th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$payment->amount}}</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$payment->date}}</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$payment->time}}</th>
                                    <th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$payment->method}}</th>
                                    <th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;"><input type="checkbox" name="checked" {{$payment->checked}}>     <a href='/checkedPayment/{{$payment->id}}' style="color:white;" class='button'><u>ตรวจสอบแล้ว</u> | <a href='/uncheckedPayment/{{$payment->id}}' style="color:white;" class='button'><u>ยกเลิก</u></th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;"><a href='/deletePayment/{{$payment->id}}' style="color:white;"><u>ลบการชำระเงิน</u></a></th>
								</tr>
								@endforeach
							</table>
					</div>
             
                </div>
            </div>
            
        </div>

@include('layouts.script')



@endsection
