<!--
<h1>Create New Lesson</h1>
<br>
<form method="POST" action='/editLesson/{{$lesson->id}}'>
    {!! csrf_field() !!}
	<table style="width:100%">
		<tr>
			<th>NAME :</th>
			<td><input type="text" name="name" value="{{$lesson->name}}"></td>
		</tr>
		<tr>
			<th>DESCRIPTION :</th>
			<td><input type="text" name="description" value="{{$lesson->description}}"></td>
		</tr>
		<tr>
			<th>VIDEO URL :</th>
			<td><input type="text" name="videoUrl" value="{{$lesson->videoUrl}}"></td>
		</tr>
		<tr>
			<th>DOCUMENT URL :</th>
			<td><input type="text" name="documentUrl" value="{{$lesson->documentUrl}}"></td>
		</tr>
		<tr>
			<th>IMAGE NAME :</th>
			<td><input type="text" name="imageName" value="{{$lesson->imageName}}"></td>
		</tr>
		<tr>
			<th>ORDER :</th>
			<td><input type="text" name="order" value="{{$lesson->order}}"></td>
		</tr>
	</table>
	<div>
        <button type="submit">Edit</button>
    </div>
</form>
-->
@extends('layouts.app')

@section('title')
    eXvertise - มาสร้างธุรกิจไปพร้อมกับเรา
@endsection

@section('content')

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

<!-- Lesson Creation Form -->
	        <div class="call-to-action-container  section-container section-container-image-bg">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
		                    <h2>แก้ไขบทเรียน</h2>
		                    <div class="divider-1 wow fadeInUp"><span></span></div>
		                    <p>
		                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
		                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
		                    </p>
		                </div>
		            </div>
		            <div class="row">
		            	<form role="form" action="/editLesson/{{$lesson->id}}" method="post">
                            {!! csrf_field() !!}

                            <div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">รหัสบทเรียน</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="code" placeholder="รหัสบทเรียน" value="{{$lesson->code}}">
							    	</div>
						  	</div>

                            <div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ชื่อบทเรียน</label>
							    	<div class="col-sm-10" >
							      	<input type="text" class="form-control input-lg" name="name" placeholder="ชื่อบทเรียน" value="{{$lesson->name}}">
							    	</div>
						  	</div>

                            <div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">คำบรรยายบทเรียน</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="description" placeholder="คำบรรยายบทเรียน" value="{{$lesson->description}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ที่อยู่วิดีโอ</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="videoUrl" placeholder="ที่อยู่วิดีโอ" value="{{$lesson->videoUrl}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">อันดับ</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="order" placeholder="อันดับ" value="{{$lesson->order}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">หัวข้อประเด็นที่ 1</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="topicSummary1" placeholder="หัวข้อประเด็นที่ 1" value="{{$lesson->topicSummary1}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">คำบรรยายประเด็นที่ 1</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="descSummary1" placeholder="คำบรรยายประเด็นที่ 1" value="{{$lesson->descSummary1}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ไอคอนประเด็นที่ 1</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="iconSummary1" placeholder="ไอคอนประเด็นที่ 1" value="{{$lesson->iconSummary1}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">หัวข้อประเด็นที่ 2</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="topicSummary2" placeholder="หัวข้อประเด็นที่ 2" value="{{$lesson->topicSummary2}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">คำบรรยายประเด็นที่ 2</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="descSummary2" placeholder="คำบรรยายประเด็นที่ 2" value="{{$lesson->descSummary2}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ไอคอนประเด็นที่ 2</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="iconSummary2" placeholder="ไอคอนประเด็นที่ 2" value="{{$lesson->iconSummary2}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">หัวข้อประเด็นที่ 3</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="topicSummary3" placeholder="หัวข้อประเด็นที่ 3" value="{{$lesson->topicSummary3}}">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">คำบรรยายประเด็นที่ 3</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="descSummary3" placeholder="คำบรรยายประเด็นที่ 3" value="{{$lesson->descSummary3}}">
							    	</div>
						  	</div>
						  	
						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ไอคอนประเด็นที่ 3</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="iconSummary3" placeholder="ไอคอนประเด็นที่ 3" value="{{$lesson->iconSummary3}}">
							    	</div>
						  	</div>

                            <hr>
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-sm-4 col-md-offset-8">
                                    <button type="submit" class="btn">แก้ไขบทเรียน</button>
                                </div>
                            </div>

                                    
                        </form>
		            </div>
		        </div>
	        </div>


@include('layouts.script')
@endsection
