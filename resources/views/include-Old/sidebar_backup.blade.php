 <div class="solso-sidebar">
	<div id="grey-sidebar" class="list-group">
		<a href="{{URL::to('ChangeEntity')}}" class="list-group-item active">
			<div class="input-group">
				<p><i class="fa fa-university"> {{Auth::user()->current_cust_name_logon}} </i></p> 
 				<p><i class="fa fa-user">  {{Auth::user()->fullname}} :: {{Auth::user()->current_entity_code_logon}}</i></p>	
 			</div>	
	  
		</a>

		  <ul class="nav" id="side-menu">
      	                     <li>
	                            <a href="#"><i class="fa fa-cogs"></i>ระบบ Admin</i><span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('getsystemlist')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>กำหนดหมวดระบบ</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('getprogramlist')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>กำหนดโปรแกรม</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('getrolelist')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>กำหนดสิทธิ์</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('getmenulist')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>กำหนดเมนู</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('getuserlist')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i> บันทึกผู้ใช้งานระบบ</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('getrolemenu')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>กำหนดสิทธ์ การใช้เมนู</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('repassword')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>เปลี่ยนรหัสผ่าน</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('getentityuser')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>กำหนดสิทธิ์การเข้า ห้าง-ร้าน</a>
	                                </li>
	                            </ul>
	                        </li>

	                        <li>
	                            <a href="#"><i class="fa fa-bars"></i> Master Data<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('entity')}}">รหัสลูกค้า (Entity)</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('sales/docmast')}}">รหัสเอกสาร</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('sales/whmast')}}">รหัสคลังสินค้า</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('sales/commission')}}">กำหนดข้อมูล Commission</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('sales/incentive')}}">กำหนดข้อมูล Incentive</a>
	                                </li>

	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>

	                         <li>
	                            <a href="#"><i class="fa fa-shopping-cart"></i> Promotion Data<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <!--<li>
	                                    <a href="{{URL::to('sales/promotion')}}">Promotion</a>
	                                </li>-->
	                                <li>
	                                    <a href="{{URL::to('pmtgrpmast')}}"> <i></i> <i></i> <i class="fa fa-caret-right"></i> กลุ่มข้อมูล</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('pmttrnsmast')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i> ประเภทรายการ</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('pmtproductset')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>กำหนดชุดเช็ทสินค้า</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('promotion')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>บันทึกโปรโมชั่น</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('pmtconsignnee')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>บันทึกห้างจัดรายการ</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('pmtpackage')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>โปรโมชั่นแพคเกจ</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('pmtdiscpremiumdeny')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>ส่วนลด ไม่เอาของแถม</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('pmtdiscshop')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>ส่วนลด ซื้อสินค้าครบ</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('pmtdiscpay')}}"><i></i> <i></i> <i class="fa fa-caret-right"></i>ส่วนลด การชำระเงิน</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li> 

	                        <li>
	                            <a href="#"><i class="fa fa-female"></i> Customer<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('sales/addcustomer')}}">ข้อมูลลูกค้า</a>
	                                </li>
	                                
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>

	                        <li>
	                            <a href="#"><i class="fa fa-th-list"></i> Transaction<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('sales/addsales')}}">บันทึกขายสินค้า </a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('sales/addremand')}}">ส่งคืนสินค้า</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('sales/addcustorder')}}">สั่งสินค้า</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        <li>
	                            <a href="#"><i class="fa fa-money"></i> Commission<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('sales/pc')}}">บันทึกข้อมูลพนักงาน</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('sales/addpctime')}}">บันทึกเวลาทำงาน</a>
	                                </li>
	                                <!--<li>
	                                    <a href="#">.. <span class="fa arrow"></span></a>
	                                    <ul class="nav nav-third-level">
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                        <li>
	                                            <a href="#">Third Level Item</a>
	                                        </li>
	                                    </ul> -->
	                                    <!-- /.nav-third-level -->
	                                <!--</li> --> 
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                         <li>
	                            <a href="#"><i class="fa fa-file-text"></i> Report<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#">รายงานการขาย</a>
	                                </li>
	                                <li>
	                                    <a href="#">รายงานสินค้า</a>
	                                </li>


	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>

	                         <li>
	                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Stock Management<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#">Stock Balance</a>
	                                </li>
	                                <li>
	                                    <a href="#">Stock Movement</a>
	                                </li>


	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
                        
                    	</ul>
	</div>
</div>

