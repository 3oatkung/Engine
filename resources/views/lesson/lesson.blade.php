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
                            <li><a class="btn btn-link-2" href="{{url()}}/lesson">บทเรียนทั้งหมด</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
             <div class="inner-bg" style="padding-top:0px;">
           
                <div class="container" style="padding-top:0px;">
                    <div class="row" style="padding-top:0px;">
                        <div class="col-sm-8 col-sm-offset-2 text wow fadeInDown" style="padding-top:20px;">
                            <h1>{{$lesson->name}}</h1>
                            <div class="description">
                            	<p>
	                            	{{$lesson->description}}
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 video fadeInLeft" style="padding-top:20px;">
                            <div class="embed-responsive embed-responsive-16by9">
		                    	<iframe src="{{$lesson->videoUrl}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		                    </div>
                        </div>
                        <div class="col-sm-5 list wow fadeInUp" style="padding-top:20px; text-align: left; color:white;">
		                    <div class="list-box">
		                    	<div class="list-box-icon">
		                    		<span aria-hidden="true" class="typcn {{$lesson->iconSummary1}}"></span>
		                    	</div>
		                    	<h3>{{$lesson->topicSummary1}}</h3>
		                    	<div class="list-box-description">
		                    		{{$lesson->descSummary1}}
		                    	</div>
		                    </div>
		                    <div class="list-box">
		                    	<div class="list-box-icon">
		                    		<span aria-hidden="true" class="typcn {{$lesson->iconSummary2}}"></span>
		                    	</div>
		                    	<h3>{{$lesson->topicSummary2}}</h3>
		                    	<div class="list-box-description">
		                    		{{$lesson->descSummary2}}
		                    	</div>
		                    </div>
		                    <div class="list-box">
		                    	<div class="list-box-icon">
		                    		<span aria-hidden="true" class="typcn {{$lesson->iconSummary3}}"></span>
		                    	</div>
		                    	<h3>{{$lesson->topicSummary3}}</h3>
		                    	<div class="list-box-description">
		                    		{{$lesson->descSummary3}}
		                    	</div>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
	                    <div class="col-sm-12 top-big-link wow fadeInUp">
	                    	<a class="btn btn-link-2" href="{{url()}}/lesson">กลับสู่หน้าบทเรียน</a>
	                    </div>
                    </div>
                </div>
            </div>
            
        </div>

@include('layouts.script')
@include('lesson.modal_lesson')
@endsection

<!--
<h1>Lesson {{$lesson->name}}</h1>
<br>
	<table style="width:100%">
		<tr>
			<th>NAME :</th>
			<td>{{$lesson->name}}</td>
		</tr>
		<tr>
			<th>DESCRIPTION :</th>
			<td>{{$lesson->description}}</td>
		</tr>
		<tr>
			<th>VIDEO URL :</th>
			<td>{{$lesson->videoUrl}}</td>
		</tr>
		<tr>
			<th>DOCUMENT URL :</th>
			<td>{{$lesson->documentUrl}}</td>
		</tr>
		<tr>
			<th>IMAGE NAME :</th>
			<td>{{$lesson->imageName}}</td>
		</tr>
		<tr>
			<th>ORDER :</th>
			<td>{{$lesson->order}}</td>
		</tr>
	</table>
-->