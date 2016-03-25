@foreach($data_obj as $crt => $v)
<div class="modal-body">
    <form class="form-horizontal">
        <input type="hidden"  id= "Role_id" type="hidden" name="Role_id" value="{{$v->role_id}}"   />
         <input type="hidden"  id= "id" type="hidden" name="id" value="{{$v->id}}"   />
        <div class="form-group">
            <label class="col-sm-2 control-label">รหัสผู้ใช้</label>
                    <div class="col-md-3">
                         <input type="text" class="form-control required" name="username" id="username"  value="{{$v->username}}" readonly>
                    </div>
            <label class="col-sm-2 control-label">รหัสผ่าน</label>
                    <div class="col-md-5">
                         <input type="text" class="form-control required required" name="password" id="password" value="{{$v->password}}" readonly>
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ชื่อผู้ใช้งาน</label>
                    <div class="col-md-10">
                         <input type="text" class="form-control required" name="fullname" id="fullname" value="{{$v->fullname}}" >
                    </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
                    <div class="col-md-4">
                         <input type="text" class="form-control" name="email" id="email" value="{{$v->email}}">
                    </div>
            <label class="col-sm-1 control-label">Tel :</label>
                    <div class="col-md-5">
                         <input type="text" class="form-control required" name="tel" id="tel" value="{{$v->tel}}" >
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">สิทธิ์ใช้งานระบบ</label>
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="RoleName" id="RoleName" value="{{$v->RoleName}}"  readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselect_role_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
                    <div class="col-md-5">
                         <input type="text" class="form-control required" name="RoleDescription" id="RoleDescription" value="{{$v->RoleDescription}}" readonly>
                    </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Entity Default</label>
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="entity_code" id="entity_code" value="{{$v->entity_logon_default}}" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselect_entity_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
                    @foreach($entity_obj as $crt => $vv)
                    <div class="col-md-5">
                         <input type="text" class="form-control required" name="entity_tname" id="entity_tname" value="{{$vv->entity_tname}}" readonly>
                    </div>
                    @endforeach
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">กลุ่ม ห้าง-ร้าน</label>
             @foreach($cust_grp_obj as $crt => $cust_grp) 
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="cust_grp_code" id="cust_grp_code"  value="{{$cust_grp->cust_grp}}"readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselect_custgrp_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
             @endforeach
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">ห้าง-ร้าน</label>
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="cust_code" id="cust_code" value="{{$v->cust_code_logon_default}}" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselect_cust_modal" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>
                    @foreach($cust_obj as $crt => $c)
                    <div class="col-md-5">
                         <input type="text" class="form-control required" name="cust_name" id="cust_name" value="{{$c->entity_tname}}" readonly>
                    </div>
        </div>      @endforeach
        <div class="form-group">
            <label class="col-sm-2 control-label">แผนก/หน่วยงาน</label>
                    <div class="col-md-4">
                         <input type="text" class="form-control required" name="current_dept_code_logon" id="current_dept_code_logon" value="{{$v->current_dept_code_logon}}" readonly>
                    </div>
                    <div class="col-md-1">
                        <a href="#" rel="clickselect_dept" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-square-o"></i>..</a>
                    </div>

        </div>
        <div class="form-group">
                   <label class="col-sm-2 control-label">สถานะ</label>
                    <div class="col-sm-4">
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
    <button type="button"  id="SaveEditUser" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>ปิด</button>
</div>
@endforeach