 <div class="solso-sidebar">
	<div id="grey-sidebar" class="list-group">
		<a href="#" class="list-group-item active">
			<div class="input-group">
				<p><i class="fa fa-university"> {{Auth::user()->current_cust_name_logon}} </i></p> 
				<p><i class="fa fa-user">  {{Auth::user()->fullname}}</i></p>	

			</div>	  
		</a>

		  <ul class="nav" id="side-menu">
                       
	                        <li>
	                            <a href="#"><i class="fa fa-bars"></i> Master Data<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('entity')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>รหัสลูกค้า (Entity)</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('docmast')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>รหัสเอกสาร</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('whmast')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>รหัสคลังสินค้า</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('commission')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>กำหนดข้อมูล Commission</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('incentive')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>กำหนดข้อมูล Incentive</a>
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
	                                    <a href="{{URL::to('pmtgrpmast')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>กลุ่มข้อมูล</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('pmttrnsmast')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>ประเภทรายการ</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('pmtproductset')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>กำหนดชุดเช็ทสินค้า</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('promotion')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>บันทึกโปรโมชั่น</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('pmtconsignnee')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>บันทึกห้างจัดรายการ</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('pmtpackage')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>โปรโมชั่นแพคเกจ</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('pmtdiscpremiumdeny')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>ส่วนลด ไม่เอาของแถม</a>
	                                </li>

	                                <li>
	                                    <a href="{{URL::to('pmtdiscshop')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>ส่วนลด ซื้อสินค้าครบ</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('pmtdiscpay')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>ส่วนลด การชำระเงิน</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li> 

	                        <li>
	                            <a href="#"><i class="fa fa-female"></i> Customer<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('customer')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>ข้อมูลลูกค้า</a>
	                                </li>
	                                
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>

	                        <li>
	                            <a href="#"><i class="fa fa-th-list"></i> Transaction<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('sales')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>บันทึกขายสินค้า</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('remand')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>ส่งคืนสินค้า</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('custorder')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>สั่งสินค้า</a>
	                                </li>
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>

	                        <li>
	                            <a href="#"><i class="fa fa-money"></i> Commission<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('pc')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>บันทึกข้อมูลพนักงาน</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('pctime')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>บันทึกเวลาทำงาน</a>
	                                </li>
	                                
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
	                        
	                         <li>
	                            <a href="#"><i class="fa fa-file-text"></i> Report<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>รายงานการขาย</a>
	                                </li>
	                                <li>
	                                    <a href="#"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>รายงานสินค้า</a>
	                                </li>


	                            </ul>
				
	                            


	                            <!-- /.nav-second-level -->
	                        </li>
			
			<li>
	                            <a href="#"><i class="fa fa-exchange"></i> Transfer Data<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="{{URL::to('data_ho2cos')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>โอนข้อมูลจากสำนักงานใหญ่มาห้าง</a>
	                                </li>
	                                <li>
	                                    <a href="{{URL::to('data_cos2ho')}}"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>โอนข้อมูลจากห้างมาสำนักงานใหญ่</a>
	                                </li>
	                                
	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>

	                         <li>
	                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Stock Management<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>Stock Balance</a>
	                                </li>
	                                <li>
	                                    <a href="#"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>Stock Movement</a>
	                                </li>


	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>

	                         <li>
	                            <a href="#"><i class="fa fa-cog"></i> System Management<span class="fa arrow"></span></a>
	                            <ul class="nav nav-second-level">
	                                <li>
	                                    <a href="#"><i class="fa fa-exchanges"></i><i class="fa fa-exchanges"></i><i class="fa fa-caret-right"></i>ข้อมูลลูกค้า</a>
	                                </li>



	                            </ul>
	                            <!-- /.nav-second-level -->
	                        </li>
                        
                    	</ul>
	</div>
</div>

