
@foreach($data_obj as $crt => $v)

<div class="modal-body">
    <form class="form-horizontal">

        <input type="hidden"  id= "Su_Menu_Id" type="hidden" name="Su_Menu_Id" value="{{$v->Su_Menu_Id}}" />
        <input type="hidden"  id= "Su_System_Id" type="hidden" name="Su_System_Id" value="{{$v->Su_System_Id}}" />
        <input type="hidden"  id= "Su_ProgramList_Id" type="hidden" name="Su_ProgramList_Id" value="{{$v->Su_ProgramList_Id}}" />
        <div class="form-group">
            <label class="col-sm-2 control-label">ระบบ</label>
                    <div class="col-md-3">
                         <input type="text" class="form-control" name="SystemCode" id="SystemCode" value="{{$v->SystemCode}}" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselectsystem_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
                    <div class="col-md-6">
                         <input type="text" class="form-control" name="SystemNameThai" id="SystemNameThai" value="{{$v->SystemNameThai}}"  readonly>
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">โปรแกรม</label>
                    <div class="col-md-3">
                         <input type="text" class="form-control" name="ProgramCode" id="ProgramCode" value="{{$v->ProgramCode}}"  readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselectprog_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
                    <div class="col-md-6">
                         <input type="text" class="form-control" name="programname" id="programname" value="{{$v->ProgramDescription}}"  readonly>
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Level</label>
                    <div class="col-md-3">
                         <input type="text" class="form-control" name="MenuLevel" id="MenuLevel" value="{{$v->MenuLevel}}" >
                    </div>
                    <label class="col-sm-1 control-label">ชื่อเมนู</label>
                    <div class="col-md-6">
                         <input type="text" class="form-control" name="MenuName" id="MenuName" value="{{$v->MenuName}}" >
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ชื่อ Icon class</label>
            <div class="col-sm-10">
                <input type="text" name="icon_class_name" id="icon_class_name" value="{{$v->icon_class_name}}" required="required" class="form-control" data-message="กรุณาระบุ ชื่อโปรโมชั่น" >      
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ลำดับ</label>
                    <div class="col-md-2">
                         <input type="text" class="form-control" name="MenuSeq" id="MenuSeq" value="{{$v->MenuSeq}}" >
                    </div>
                   <label class="col-sm-2 control-label">สถานะ</label>
                    <div class="col-sm-6">
            
                                            <select class="form-control required" id="txtRecStatusID" name="txtRecStatusID">
                                              <option value="ACTIVE" <?php if($v->RecordStatus == "ACTIVE" ) { echo "selected"; } ?>>Active</option>
                                              <option value="INACTIVE" <?php if($v->RecordStatus == "INACTIVE" ) { echo "selected"; } ?>>Inactive</option>
                                            </select>
                    </div>


        </div>



        <!-- <a href="#addtr" rel="testprepend" class="btn btn-primary">Add Rows</a> -->

        <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    </form>


</div>
<div class="modal-footer">
    <button type="button"  id="SaveEditMenu" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
@endforeach