<!--
<form method="POST" action='/editUser/{{$user->id}}'>
    {!! csrf_field() !!}
	<table style="width:100%">
		<tr>
			<th>ID :</th>
			<td>{{$user->id}}</td>
		</tr>
		<tr>
			<th>NAME :</th>
			<td><input type="text" name="name" value="{{$user->name}}"></td>
		</tr>
		<tr>
			<th>LASTNAME :</th>
			<td><input type="text" name="lastname" value="{{$user->lastname}}"></td>
		</tr>
		<tr>
			<th>EMAIL :</th>
			<td><input type="email" name="email" value="{{$user->email}}"></td>
		</tr>
		<tr>
			<th>MEMBER STATUS :</th>
			<td>{{$user->memberStatus}}</td>
		</tr>
		<tr>
			<th>CREATE AT :</th>
			<td>{{$user->created_at}}</td>
		</tr>
		<tr>
			<th>UPDATE AT :</th>
			<td>{{$user->updated_at}}</td>
		</tr>
	</table>
	<div>
        <button type="submit">Update User Information</button>
    </div>
</form>
-->

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
                            <li><a class="scroll-link" href="#why">ทำไมคุณควรเรียนกับเรา</a></li>
                            <li><a class="scroll-link" href="#why">เราจะสอนอะไร</a></li>
                            <li><a class="scroll-link" href="#how-it-works">ใครที่เหมาะกับบทเรียนของเรา</a></li>
                            <li><a class="scroll-link" href="#pricing">ราคา</a></li>
                            <li><a class="scroll-link" href="#how-it-works">วิธีการสมัคร</a></li>
                            <li><a class="btn btn-link-2" href="#">สำหรับสมาชิก</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="inner-bg" style="padding-top:5px; ">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-6 col-md-offset-3 form-box wow fadeInUp">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>ข้อมูลสมาชิก</h3>
                                    <p>สำหรับแก้ไขข้อมูลสมาชิก:</p>
                                </div>
                                <div class="form-top-right">
                                    <span aria-hidden="true" class="typcn typcn-pencil"></span>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="/editUser/{{$user->id}}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1">รหัสสมาชิก</span>
                                        <input type="text" name="id" value="{{$user->id}}" class="form-control input-lg" disabled>
                                    </div>

                                    <div class="input-group input-group-lg" style="padding-top: 10px;">
                                        <span class="input-group-addon" id="sizing-addon1">ชื่อ</span>
                                        <input type="text" name="name" value="{{$user->name}}" class="form-control input-lg">
                                    </div>

                                    <div class="input-group input-group-lg" style="padding-top: 10px;">
                                        <span class="input-group-addon" id="sizing-addon1">นามสกุล</span>
                                        <input type="text" name="lastname" value="{{$user->lastname}}" class="form-control input-lg">
                                    </div>

                                    <div class="input-group input-group-lg" style="padding-top: 10px;">
                                        <span class="input-group-addon" id="sizing-addon1">อีเมลล์</span>
                                        <input type="email" name="email" value="{{$user->email}}" class="form-control input-lg" disabled>
                                    </div>

                                    <div class="input-group input-group-lg" style="padding-top: 10px;">
                                        <span class="input-group-addon" id="sizing-addon1">สถานะสมาชิก</span>
                                        <input type="text" name="status" value="{{$user->memberStatus}}" class="form-control input-lg">
                                    </div>

                                    <div class="input-group input-group-lg" style="padding-top: 10px;">
                                        <span class="input-group-addon" id="sizing-addon1">สมัครเมื่อ</span>
                                        <input type="text" name="registerDate" value="{{$user->created_at}}" class="form-control input-lg" disabled>
                                    </div>

                                    <div class="input-group input-group-lg" style="padding-top: 10px;">
                                        <span class="input-group-addon" id="sizing-addon1">แก้ไขเมื่อ</span>
                                        <input type="text" name="editDate" value="{{$user->updated_at}}" class="form-control input-lg" disabled>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-offset-8">
                                            <button type="submit" class="btn">อัพเดทข้อมูล</button>
                                        </div>
                                    </div>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

@include('layouts.script')
@endsection