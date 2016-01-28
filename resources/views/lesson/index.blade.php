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
                            <li><a class="btn btn-link-2" href="{{url()}}">กลับสู่หน้าหลัก</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="inner-bg" style="padding-top:0px; padding-bottom:0px;">
                <div class="container" style="padding-top:0px;">
                	
                    <div class="row" style="padding-top:0px;">
                        <div class="col-sm-8 col-sm-offset-2 text wow fadeInUp" style="padding-top:20px; padding-bottom:20px;">
                            <h1>มาเรียนรู้กับบทเรียนของเราได้เลย</h1>
                            <div class="description">
                            	<p>
	                            	คุณจะได้เรียนรู้วิธีการสร้างเพจ ทำโฆษณา วิเคราะห์ข้อมูลสำคัญๆ ต่างๆ หลังจากเรียนจบจากบทเรียนเหล่านี้
                            	</p>
                            </div>
                        </div>
                    </div>

					<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 images-slider wow fadeInUp">
                        	
                            <div id="slider-1" class="carousel slide" data-ride="carousel">
                            	<!-- Indicators -->
                            	<ol class="carousel-indicators">
                            		<li data-target="#slider-1" data-slide-to="0" class="active"></li>
                            		<li data-target="#slider-1" data-slide-to="1"></li>
                            		<li data-target="#slider-1" data-slide-to="2"></li>
                            		<li data-target="#slider-1" data-slide-to="3"></li>
                            	</ol>
                            	<!-- Wrapper for slides -->
                            	<div class="carousel-inner" role="listbox">
                            		<div class="item active">
                            			<a href='/lesson/02'><img src="{{url()}}/assets/img/carousel/LES002.png" alt=""></a>
                            		</div>
                            		<div class="item">
                            			<a href='/lesson/05'><img src="{{url()}}/assets/img/carousel/LES005.png" alt=""></a>
                            		</div>
                            		<div class="item">
                            			<a href='/lesson/06'><img src="{{url()}}/assets/img/carousel/LES006.png" alt=""></a>
                            		</div>
                            		<div class="item">
                            			<a href='/lesson/10'><img src="{{url()}}/assets/img/carousel/LES010.png" alt=""></a>
                            		</div>
                            	</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@include('lesson.lessonlist')
@include('layouts.script')
@endsection

<!--
<table style="width:100%">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>DESCRIPTION</th>
		<th>VIDEO URL</th>
		<th>DOCUMENT URL</th>
		<th>IMAGE NAME</th>
		<th>ORDER</th>
	</tr>
	@foreach ($lessons as $lesson)
	<tr>
		<th>{{$lesson->id}}</th>
		<th><a href="lesson/{{$lesson->id}}">{{$lesson->name}}</a></th>
		<th>{{$lesson->description}}</th>
		<th>{{$lesson->videoUrl}}</th>
		<th>{{$lesson->documentUrl}}</th>
		<th>{{$lesson->imageName}}</th>
		<th>{{$lesson->order}}</th>
	</tr>
	@endforeach
</table>
-->