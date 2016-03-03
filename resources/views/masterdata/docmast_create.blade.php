<!--
/** 
  * === FORM CREATE ===
  * add solsoForm in form class
*/
-->

{!! Form::open(array('url'=>'docmast','role' => 'form','class' => 'solsoForm'))!!}
	<div class="col-sm-12">
	
			<div class="container">
				<div class="row form-group">
					<div class="col-sm-2">
						<label>Doc Code</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="doc_code" id="input" class="form-control input-sm required" value="<?php  if(isset($input['doc_code'])) { echo $input['doc_code']; } ?>">
						{!!$errors->first('doc_code','<p class="error">:message</p>')!!}
					</div>

										
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label>Doc Name </label>
					</div>
					<div class="col-sm-7">
						<input type="text" name="doc_desc" id="input" class="form-control input-sm required" value="<?php  if(isset($input['doc_desc'])) { echo $input['doc_desc']; } ?>">
						{!!$errors->first('doc_desc','<p class="error">:message</p>')!!}
					</div>
				</div>	
				

				<div class="row form-group">
					<div class="col-sm-2">
						<label>Doc Ctrl</label>
					</div>
					<div class="col-sm-2">
						<input type="text" name="doc_ctrl" id="input" class="form-control input-sm required" value="<?php  if(isset($input['doc_ctrl'])) { echo $input['doc_ctrl']; } ?>">
						{!!$errors->first('doc_ctrl','<p class="error">:message</p>')!!}
					</div>
					<div class="col-sm-2 col-sm-offset-1">
						<label>Stock Code</label>
					</div>

					<div class="col-sm-2">
						<select class="form-control required" id="select" name="ictran_code">
						          <option value="REC">REC</option>
						          <option value="ISS">ISS</option>
						 </select>
						 {!!$errors->first('ictran_code','<p class="error">:message</p>')!!}
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label>Post Type</label>
					</div>
					<div class="col-sm-3">
						<select class="form-control required" id="select" name="post_type">
						          <option value="HO">สำนักงานใหญ่</option>
						          <option value="COS">ห้าง</option>
						 </select>
						{!!$errors->first('post_type','<p class="error">:message</p>')!!} 
					</div>
					
				</div>

				

				<!-- <input type ="hidden" name="_token"  value="{{csrf_token()}}"> -->

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