        <!-- How it works -->
        <div class="how-it-works-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 how-it-works section-description wow fadeIn">
	                    <h2>พร้อมสร้างธุรกิจทันที ใน <strong>4</strong> ขั้นตอน</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-pencil"></span>
	                		<span aria-hidden="true" class="how-it-works-step">1</span>
	                	</div>
	                    <h3>สมัครสมาชิก</h3>
	                    <p>สมัครสมาชิก เข้าสู่ระบบของเรา</p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-ticket"></span>
	                		<span aria-hidden="true" class="how-it-works-step">2</span>
	                	</div>
	                    <h3>ชำระเงิน</h3>
	                    <p>ชำระเงิน ด้วย Paypal, บัตรเครดิต, หรือ การโอนเงิน</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-key-outline"></span>
	                		<span aria-hidden="true" class="how-it-works-step">3</span>
	                	</div>
	                    <h3>แจ้งการชำระเงิน</h3>
	                    <p>หลังจากแจ้งการชำระเงิน คุณจะสามารถเข้าสู่บทเรียนของเราได้ทันที</p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-thumbs-up"></span>
	                		<span aria-hidden="true" class="how-it-works-step">4</span>
	                	</div>
	                    <h3>เริ่มการเรียนรู้</h3>
	                    <p>เริ่มการเรียนรู้เพื่อสร้างธุรกิจของคุณได้เลย</p>
                    </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp">
	            		@if($memberStatus=="")
								<!-- NON MEMBET MENU -->
                        		<a class="btn btn-link-1 scroll-link" href="#pricing">สั่งซื้อเลย!</a>
	      					@elseif ($memberStatus=="Member") 
	      						<!-- MEMBER MENU -->
                        		<a class="btn btn-link-1" href="/lesson">เข้าสู่บทเรียน</a>
	      					@elseif ($memberStatus=="Admin") 
	      						<!-- ADMIN MENU -->
	      					@elseif ($memberStatus=="Unregistered")
	      						<!-- GUEST MENU -->
                        		<a class="btn btn-link-1" href="/auth/register">สมัครสมาชิกใหม่</a>
	      					@endif
	            	</div>
	            </div>
	        </div>
        </div>