
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">เพิ่ม การกำหนดเมนูระบบ</h4>
</div>
<div class="modal-body">
    <form class="form-horizontal">
        <input type="hidden"  id= "Su_System_Id" type="hidden" name="Su_System_Id"  />
        <input type="hidden"  id= "Su_ProgramList_Id" type="hidden" name="Su_ProgramList_Id"  />
        <div class="form-group">
            <label class="col-sm-2 control-label">ระบบ</label>
                    <div class="col-md-3">
                         <input type="text" class="form-control" name="SystemCode" id="SystemCode" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselectsystem_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
                    <div class="col-md-6">
                         <input type="text" class="form-control" name="SystemNameThai" id="SystemNameThai" readonly>
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">โปรแกรม</label>
                    <div class="col-md-3">
                         <input type="text" class="form-control" name="ProgramCode" id="ProgramCode" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselectprog_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
                    <div class="col-md-6">
                         <input type="text" class="form-control" name="programname" id="programname" readonly>
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Level</label>
                    <div class="col-md-3">
                         <input type="text" class="form-control" name="MenuLevel" id="MenuLevel" >
                    </div>
                    <label class="col-sm-1 control-label">ชื่อเมนู</label>
                    <div class="col-md-6">
                         <input type="text" class="form-control" name="MenuName" id="MenuName" >
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ชื่อ Icon class</label>
            <div class="col-sm-10">
                <input type="text" name="icon_class_name" id="icon_class_name" required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" >      
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ลำดับ</label>
                    <div class="col-md-2">
                         <input type="text" class="form-control" name="MenuSeq" id="MenuSeq" >
                    </div>
                   <label class="col-sm-2 control-label">สถานะ</label>
                    <div class="col-sm-6">
            
                                        <select class="form-control required" id="txtRecStatusID" name="txtRecStatusID">
                                          <option value="ACTIVE">Active</option>
                                          <option value="INACTIVE">Inactive</option>
                                        </select>   
                    </div>


        </div>



        <!-- <a href="#addtr" rel="testprepend" class="btn btn-primary">Add Rows</a> -->

        <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    </form>


</div>
<div class="modal-footer">
    <button type="button"  id="SaveNewMenu" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
