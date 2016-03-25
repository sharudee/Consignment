
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">เปลี่ยนรหัสผ่าน</h4>
</div>
<div class="modal-body">
    <form class="form-horizontal">
        <input type="hidden"  id= "id" type="hidden" name="id"  />
        <div class="form-group">
            <label class="col-sm-4 control-label">รหัสผู้ใช้</label>
                    <div class="col-md-8">
                         <input type="text" class="form-control" name="username" id="username" >
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">เบอร์โทรติดต่อ</label>
                    <div class="col-md-8">
                         <input type="text" class="form-control" name="password_old" id="password_old" >
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">รหัสผ่าน ใหม่</label>
                    <div class="col-md-8">
                         <input type="text" class="form-control" name="password_new" id="password_new" >
                    </div>
        </div>

        <!-- <a href="#addtr" rel="testprepend" class="btn btn-primary">Add Rows</a> -->

        <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    </form>


</div>
<div class="modal-footer">
    <button type="button"  id="SaveRePassword" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
