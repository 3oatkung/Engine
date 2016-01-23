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
                            <!-- ADMIN MENU -->
	      						<li><a class="" href="{{url()}}">หน้าหลัก</a></li>
	      						<li><a class="" href="{{url()}}/lessonAdmin">รายชื่อบทเรียน</a></li>
								<li><a class="" href="{{url()}}/showPayments">รายการชำระเงิน</a></li>
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
	                            	จัดการบริหารสมาชิกของ eXvertise
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
		    				<table style="color:white; margin-left: auto;
    margin-right: auto;">
								<tr style="border:1px solid #FFFFFF;">
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">รหัส</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">ชื่อ</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">อีเมลล์</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">สถานะสมาชิก</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">เพิ่มเป็นสมาชิก</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">ยกเลิกสมาชิก</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">แก้ไขผู้ใช้งาน</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">ลบผู้ใช้งาน</th>
								</tr>
								@foreach ($users as $user)
								<tr>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$user->id}}</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$user->name}}</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$user->email}}</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;">{{$user->memberStatus}}</th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;"><a href='/setMember/{{$user->id}}' style="color:white;"><u>เพิ่มเป็นสมาชิก</u></a></th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;"><a href='/cancelMember/{{$user->id}}' style="color:white;"><u>ยกเลิกสมาชิก</u></a></th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;"><a href='/editUser/{{$user->id}}' style="color:white;"><u>แก้ไขผู้ใช้งาน</u></a></th>
									<th style="border:1px solid #FFFFFF; padding-left: 5px; padding-right: 5px;"><a href='/deleteUser/{{$user->id}}' style="color:white;"><u>ลบผู้ใช้งาน</u></a></th>
								</tr>
								@endforeach
							</table>
					</div>
             
                </div>
            </div>
            
        </div>

@include('layouts.script')
@endsection
