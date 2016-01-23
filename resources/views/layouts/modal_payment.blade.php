<!-- MODAL: Frequent questions -->
        <div class="modal fade" id="modal-payment" tabindex="-1" role="dialog" aria-labelledby="modal-faq-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h2 class="modal-title" id="modal-faq-label">สั่งซื้อ</h2>
        			</div>
        			<div class="modal-body">
        				<p>
	                    	เพื่อความสะดวก เราได้เปิด 2 ช่องทางการชำระเงินให้คุณเลือก
	                    </p>
	                    <hr>
	                    <h3>วิธีที่ 1 สั่งซื้อผ่าน Paypal</h3>
	                    <p>
	                    	คลิกที่ปุ่ม Buy Now เพื่อสั่งซื้อผ่าน Paypal
		                    	<!-- PayPal Logo --><table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_secured_by_pp_2line.png" alt="How PayPal Works" /></td></tr></table><!-- PayPal Logo -->
	                        <br>
	                        <form align="center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	                        <input type="hidden" name="cmd" value="_s-xclick">
	                        <input type="hidden" name="hosted_button_id" value="KJCTRVY4YM7JS">
	                        <input type="image" src="https://www.paypalobjects.com/en_GB/TH/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
	                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	                        </form>
	                    </p>
	                    <hr>
	                    <h3>วิธีที่ 2 สั่งซื้อผ่านการโอนเงิน</h3>
	                    <p>
	                    	คุณสามารถโอนเงินเข้าที่บัญชี xxx-xxxxx-xx
	                    	หลักจากชำระเงินเรียบร้อยแล้ว ให้แจ้งการโอนเงินได้ที่ <a href="{{url()}}/createPayment">แจ้งการชำระเงิน</a>
	                    </p>
        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        	</div>
        </div>