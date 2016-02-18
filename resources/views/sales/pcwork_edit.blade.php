<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

{!! Form::open(array('url' => 'pcwork/' . Request::segment(2) , 'role' => 'form', 'method' => 'PUT', 'class' => 'solsoForm')) !!} 
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>รหัสพนักงาน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="emp_code" id="input" class="form-control input-sm required" value="{{ $pcwork['emp_code'] }}" readonly>
						
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันที่ทำงาน</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="work_date" id="input" class="form-control input-sm required" value="{{ $pcwork['work_date'] }}" readonly>
						
					</div>
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>วันทำงาน</label>
					</div>
					<div class="col-sm-2">
						 <select class="form-control required" id="select" name="work_type">
						          <option value="1" <?php if($pcwork['work_type'] =='1') { echo "selected"; } ?>>วันทำงาน</option>
						          <option value="2" <?php if($pcwork['work_type']=='2') { echo "selected"; } ?>>วันหยุด</option>
						 </select>
					</div>
					
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>ประเภท</label>
					</div>
					<div class="col-sm-2">
						<select class="form-control required" id="select" name="pc_type">
						          <option value="P" <?php if($pcwork['pc_type'] =='P') { echo "selected"; } ?>>พนักงานประจำ</option>
						          <option value="T" <?php if($pcwork['pc_type']=='T') { echo "selected"; } ?>>แทน</option>
						 </select>
					</div>
					
				</div>

			</div>


			<div class="form-group col-md-12">
				<button type="button" class="btn btn-success btn-lg solsoSave" 
				data-message-title="Create notification" 
				data-message-error="Validation error messages" 
				data-message-success="Data was saved">
				<i class="fa fa-save"></i> Save
				</button>
			</div>
	
</div>
	
{!! Form::close()!!}