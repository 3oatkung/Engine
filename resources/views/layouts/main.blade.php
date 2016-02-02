<!-- Top content -->
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    @endif
        <div class="top-content">
        	
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
						<a class="navbar-brand" >Marco - Bootstrap Landing Page</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-navbar-1">
						<ul class="nav navbar-nav navbar-right">
							<!-- GUEST MENU-->
							@if($memberStatus=="")
								<!-- NON MEMBET MENU -->
								<li><a class="scroll-link" href="#more-features">ทำไมคุณควรเรียนกับเรา</a></li>
								<li><a class="scroll-link" href="#always-beautiful">เราจะสอนอะไร</a></li>
								<li><a class="scroll-link" href="#features">ใครที่เหมาะกับบทเรียนของเรา</a></li>
								<li><a class="scroll-link" href="#how-it-works">วิธีการสมัคร</a></li>
								<li><a class="scroll-link" href="#pricing">ราคา</a></li>
								<li><a class="" href="/createPayment">แจ้งการชำระเงิน</a></li>
								<li><a class="btn btn-link-2" href="/auth/logout">ออกจากระบบ</a></li>
	      					@elseif ($memberStatus=="Member") 
	      						<!-- MEMBER MENU -->
	      						<li><a class="scroll-link" href="#more-features">ทำไมคุณควรเรียนกับเรา</a></li>
								<li><a class="scroll-link" href="#always-beautiful">เราจะสอนอะไร</a></li>
								<li><a class="scroll-link" href="#how-it-works">ใครที่เหมาะกับบทเรียนของเรา</a></li>
								<li><a class="btn btn-link-2" href="/lesson">เข้าสู่บทเรียน</a></li>
								<li><a class="btn btn-link-2" href="/auth/logout">ออกจากระบบ</a></li>
	      					
	      					@elseif ($memberStatus=="Admin") 
	      						<!-- ADMIN MENU -->
	      						<li><a class="" href="{{url()}}/lessonAdmin">รายชื่อบทเรียน</a></li>
								<li><a class="" href="{{url()}}/user">รายชื่อสมาชิก</a></li>
								<li><a class="" href="{{url()}}/showPayments">รายการชำระเงิน</a></li>
								<li><a class="btn btn-link-2" href="/auth/logout">ออกจากระบบ</a></li>
	      					
	      					@elseif ($memberStatus=="Unregistered")
	      						<!-- GUEST MENU -->
	      						<li><a class="scroll-link" href="#more-features">ทำไมคุณควรเรียนกับเรา</a></li>
								<li><a class="scroll-link" href="#always-beautiful">เราจะสอนอะไร</a></li>
								<li><a class="scroll-link" href="#features-container">ใครที่เหมาะกับบทเรียนของเรา</a></li>
								<li><a class="scroll-link" href="#how-it-works">วิธีการสมัคร</a></li>
								<li><a class="scroll-link" href="#pricing">ราคา</a></li>
								<li><a class="btn btn-link-2" href="/auth/register">สมัครสมาชิกใหม่</a></li>
	      					@endif

						</ul>
					</div>
				</div>
			</nav>
        	
            <div class="inner-bg">
                <div class="container">


							<!-- GUEST MENU-->
							@if($memberStatus=="")
								<!-- NON MEMBER MENU -->
			                    <div class="row">
			                        <div class="col-sm-7 text">
			                            <h1 class="wow fadeInLeftBig">โฆษณาบนเฟสบุ๊ค "คุณทำได้" ด้วยตัวเอง</h1>
			                            <div class="description wow fadeInLeftBig">
			                            	<p>
				                            	มาเริ่มเรียนไปกับเรา เราจะสอนคุณตั้งแต่ การทำเพจ <br>สร้างโฆษณา และ เทคนิค ที่จะทำให้ลดค่าใช้จ่ายลง
			                            	</p>
			                            </div>
			                            <div class="top-big-link wow fadeInUp">
			                            	<a class="btn btn-link-1 scroll-link" href="#pricing">ค่าใช้จ่าย</a>
			                            	<a class="btn btn-link-2 scroll-link" href="#always-beautiful">ทำไมต้องเรียนกับเรา</a>
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
								
	      					@elseif ($memberStatus=="Member") 
	      						<!-- MEMBER MENU -->
			                    <div class="row">
			                        <div class="col-sm-12 text">
			                            <h1 class="wow fadeInLeftBig">โฆษณาบนเฟสบุ๊ค "คุณทำได้" ด้วยตัวเอง</h1>
			                            <div class="description wow fadeInLeftBig">
			                            	<p>
				                            	มาเริ่มเรียนไปกับเรา เราจะสอนคุณตั้งแต่ การทำเพจ <br>สร้างโฆษณา และ เทคนิค ที่จะทำให้ลดค่าใช้จ่ายลง
			                            	</p>
			                            </div>
			                            <div class="top-big-link wow fadeInUp">
			                            	<a class="btn btn-link-2" href="/lesson">เข้าสู่บทเรียน</a>
			                            </div>
			                        </div>
			                    </div>	      						
	      					
	      					@elseif ($memberStatus=="Admin") 
	      						<!-- ADMIN MENU -->
			                    <div class="row">
			                        <div class="col-sm-12 text">
			                            <h1 class="wow fadeInLeftBig">โฆษณาบนเฟสบุ๊ค "คุณทำได้" ด้วยตัวเอง</h1>
			                            <div class="description wow fadeInLeftBig">
			                            	<p>
				                            	มาเริ่มเรียนไปกับเรา เราจะสอนคุณตั้งแต่ การทำเพจ <br>สร้างโฆษณา และ เทคนิค ที่จะทำให้ลดค่าใช้จ่ายลง
			                            	</p>
			                            </div>

			                            <div class="top-big-link wow fadeInUp">
			                            	<a class="btn btn-link-1 scroll-link" href="#pricing">ค่าใช้จ่าย</a>
			                            	<a class="btn btn-link-2 scroll-link" href="#always-beautiful">ทำไมต้องเรียนกับเรา</a>
			                            </div>
			                        </div>
			                    </div>
	      					
	      					@elseif ($memberStatus=="Unregistered")
	      						<!-- GUEST MENU -->
              			     	<div class="row">
                        <div class="col-sm-7 text">
			                            <h1 class="wow fadeInLeftBig">โฆษณาบนเฟสบุ๊ค "คุณทำได้" ด้วยตัวเอง</h1>
			                            <div class="description wow fadeInLeftBig">
			                            	<p>
				                            	มาเริ่มเรียนไปกับเรา เราจะสอนคุณตั้งแต่ การทำเพจ <br>สร้างโฆษณา และ เทคนิค ที่จะทำให้ลดค่าใช้จ่ายลง
			                            	</p>
			                            </div>

                            <div class="top-big-link wow fadeInUp">
                            	<a class="btn btn-link-1 scroll-link" href="#pricing">ค่าใช้จ่าย</a>
                            	<a class="launch-modal btn btn-link-1" data-modal-id="modal-payment">สั่งซื้อเลย</a>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box wow fadeInUp">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>เข้าสู่ระบบ</h3>
                            		<p>ยินดีต้อนรับสมาชิก:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<span aria-hidden="true" class="typcn typcn-pencil"></span>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="/auth/login" method="POST">
									{!! csrf_field() !!}

			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">อีเมลล์</label>
			                        	<input type="text" name="email" placeholder="อีเมลล์" class="form-control input-lg">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">รหัสผ่าน</label>
			                        	<input type="password" name="password" placeholder="รหัสผ่าน" class="form-control input-lg" >
			                        </div>
			                        <div class="row">		                        
									    <div class="col-sm-6">
									        <input type="checkbox" name="remember"><a style="color:white;"> จดจำการใช้งาน</a>  
									    </div>
									    <div class="col-sm-6" style="text-align: right;">
									      <a style="color:white;" href="/password/email"> ลืมรหัสผ่าน</a>  
									    </div>
	
				                    </div>	
			                        <button type="submit" class="btn">เข้าสู่ระบบ</button>
			                    </form>
		                    </div>    
                        </div>
                    			</div>

	      					@endif


                </div>
            </div>
            
        </div>