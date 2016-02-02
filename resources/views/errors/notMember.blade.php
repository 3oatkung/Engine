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
                        <a class="navbar-brand">Marco - Bootstrap Landing Page</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="btn btn-link-2" href="{{url()}}">กลับสู่หน้าหลัก</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
                        <div class="inner-bg">
                <div class="container">


							<!-- GUEST MENU-->

								<!-- NON MEMBER MENU -->
			                    <div class="row">
			                        <div class="col-sm-7 text">
			                            <h1 class="wow fadeInLeftBig">ยินดีต้อนรับ สมาชิกเข้าสู่ eXvertise</h1>
			                            <div class="description wow fadeInLeftBig">
			                            	<p>
				                            	คุณสามารถเข้าสู่บทเรียนของเรา และ เริ่มสร้างธุรกิจ <br>
				                            	ได้หลังจากชำระค่าสมาชิก
			                            	</p>
			                            </div>
			                            <div class="top-big-link wow fadeInUp">
			                            	
			                            </div>
			                        </div>
			                        <div class="col-sm-5 form-box wow fadeInUp">
			                        	
			                        	<div class="pricing-box-inner">
		                	<div class="pricing-box-price">
		                		<span>เพียง</span><strong>599</strong><span> บาท</span>
		                		<div class="pricing-box-icon">
			                		<span aria-hidden="true" class="typcn typcn-star"></span>
			                	</div>
		                	</div>
		                    <h3>จากราคาเต็ม <strike>1,000</strike> บาท</h3>
		                    <h4>เริ่มการเรียนรู้วันนี้</h4>
		                    <div class="pricing-box-features">
		                    	<ul>
		                    		<li>เริ่มธุรกิจของคุณ</li>
		                    		<li>สร้างยอดขายให้มากขึ้น</li>
		                    		<li>เปิดโอกาสใหม่ๆให้ร้านของคุณ</li>
		                    	</ul>
		                    </div>
		                    <div class="pricing-box-sign-up">
		                    	<a href="#" class="launch-modal btn btn-link-1" data-modal-id="modal-payment">สังซื้อเลย</a>
		                    </div>
		                </div>

			                        </div>
			                    </div>
								



                </div>
            </div>
            
        </div>


@include('layouts.modal_payment')
@include('layouts.script')
@endsection