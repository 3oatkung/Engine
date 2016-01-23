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
								<li><a class="" href="{{url()}}/user">รายชื่อสมาชิก</a></li>
								<li><a class="" href="{{url()}}/showPayments">รายการชำระเงิน</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        
             <div class="inner-bg" style="padding-top:0px; padding-bottom:0px;">
           
                <div class="container" style="padding-top:0px;">
                    <div class="row" style="padding-top:0px;">
                        <div class="col-sm-8 col-sm-offset-2 text wow fadeInDown" style="padding-top:20px;">
                            <h1>บทเรียนต่างๆของเรา</h1>
                            <div class="description" >
                            	<p style="padding-bottom:20px;">
	                            	รวมรายชื่อบทเรียนต่างๆของเรา สามารถเข้าไปแก้ไขได้จากหน้านี้
                            	</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
                    <!-- Features -->
	        <div class="features-container section-container" >
		        <div class="container" style="padding-bottom:40px;">
		            <div class="row">
		                <div class="col-sm-12 features section-description wow fadeIn">
		                    <h2>บทเรียนของเรา</h2>
		                    <div class="divider-1 wow fadeInUp"><span></span></div>
		                </div>
		            </div>

					@foreach ($lessons as $lesson)
						            @if($lesson->newRow)
						            <div class="row">
						            @endif
					                	<a class="col-sm-4 features-box {{$lesson->grey}} wow fadeInUp" href="/editLesson/{{$lesson->id}}">
						                	<img class="img-responsive" src="assets/img/lessons/{{$lesson->code}}.png" alt="{{$lesson->name}}">
						                    <h3>{{$lesson->name}}</h3>
						                    <p>{{$lesson->description}}</p>
					                    </a>
					                    
					                @if($lesson->endRow)
						            </div>
						            @endif
					@endforeach
		        </div>
	        </div>

                <!-- Lesson Creation Form -->
	        <div class="call-to-action-container section-container section-container-image-bg">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
		                    <h2>เพิ่มบทเรียนใหม่</h2>
		                    <div class="divider-1 wow fadeInUp"><span></span></div>
		                    <p>
		                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
		                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
		                    </p>
		                </div>
		            </div>
		            <div class="row">
		            	<form role="form" action="/createLesson/" method="post">
                            {!! csrf_field() !!}

                            <div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">รหัสบทเรียน</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="code" placeholder="รหัสบทเรียน">
							    	</div>
						  	</div>

                            <div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ชื่อบทเรียน</label>
							    	<div class="col-sm-10" >
							      	<input type="text" class="form-control input-lg" name="name" placeholder="ชื่อบทเรียน">
							    	</div>
						  	</div>

                            <div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">คำบรรยายบทเรียน</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="description" placeholder="คำบรรยายบทเรียน">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ที่อยู่วิดีโอ</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="videoUrl" placeholder="ที่อยู่วิดีโอ">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">อันดับ</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="order" placeholder="อันดับ">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">หัวข้อประเด็นที่ 1</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="topicSummary1" placeholder="หัวข้อประเด็นที่ 1">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">คำบรรยายประเด็นที่ 1</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="descSummary1" placeholder="คำบรรยายประเด็นที่ 1">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ไอคอนประเด็นที่ 1</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="iconSummary1" placeholder="ไอคอนประเด็นที่ 1">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">หัวข้อประเด็นที่ 2</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="topicSummary2" placeholder="หัวข้อประเด็นที่ 2">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">คำบรรยายประเด็นที่ 2</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="descSummary2" placeholder="คำบรรยายประเด็นที่ 2">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ไอคอนประเด็นที่ 2</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="iconSummary2" placeholder="ไอคอนประเด็นที่ 2">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">หัวข้อประเด็นที่ 3</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="topicSummary3" placeholder="หัวข้อประเด็นที่ 3">
							    	</div>
						  	</div>

						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">คำบรรยายประเด็นที่ 3</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="descSummary3" placeholder="คำบรรยายประเด็นที่ 3">
							    	</div>
						  	</div>
						  	
						  	<div class="form-group" style="padding-top: 40px;">
						    	<label class="col-sm-2 control-label" style="font-size: 15px;">ไอคอนประเด็นที่ 3</label>
							    	<div class="col-sm-10">
							      	<input type="text" class="form-control input-lg" name="iconSummary3" placeholder="ไอคอนประเด็นที่ 3">
							    	</div>
						  	</div>

                            <hr>
                            <div class="row" style="padding-top: 20px;">
                                <div class="col-sm-4 col-md-offset-8">
                                    <button type="submit" class="btn">เพิ่มบทเรียนใหม่</button>
                                </div>
                            </div>

                                    
                        </form>
		            </div>
		        </div>
	        </div>

        
@include('layouts.script')
@endsection
