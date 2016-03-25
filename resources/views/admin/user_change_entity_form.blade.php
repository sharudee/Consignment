
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">เปลี่ยน Entity , ห้าง-ร้าน</h4>
</div>
<div class="modal-body">
    <form class="form-horizontal">
        <input type="hidden"  id= "Role_id" type="hidden" name="Role_id"  />
 
        <div class="form-group">
            <label class="col-sm-2 control-label">กลุ่มข้อมูล</label>
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="entity_code" id="entity_code" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clike_entity_and_cust_allow_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>

        </div>
      
        <div class="form-group">
            <label class="col-sm-2 control-label">ห้าง-ร้าน</label>
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="cust_code" id="cust_code" readonly>
                    </div>
                    <div class="col-md-6">
                         <input type="text" class="form-control required" name="cust_name" id="cust_name" readonly>
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">แผนก/หน่วยงาน</label>
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="current_dept_code_logon" id="current_dept_code_logon" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselect_dept" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>

        </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    </form>


</div>
<div class="modal-footer">
    <button type="button"  id="SaveSubmitChangeEntity" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
