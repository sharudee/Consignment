{!! Form::open(array('url' => 'submiteditpromotion/' . Request::segment(2) , 'role' => 'form', 'method' => 'POST', 'class' => 'solsoForm')) !!} 


<div class="modal fade" id="solsoCrudModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">แก้ไข ข้อมูลโปรโมชั่น</h4>
			</div>
			<div class="modal-body">
				<div class="row solsoShowForm"></div>
			</div>
			<div class="modal-footer">
				<button type="submit" id="save_edit" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
			</div>
		</div>
	</div>
</div>

{!! Form::close()!!}

