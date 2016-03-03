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

	                        
	                        
                        
                    	</ul>
	</div>
</div>

