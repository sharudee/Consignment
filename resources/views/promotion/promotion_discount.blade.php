@extends('include.index')
@section('title_page') Sales - @stop

@section('content')



    <h1><i class="fa fa-list"></i> บันทึกข้อมูลส่วนลดสินค้า</h1>
<div class="container">
    <fieldset>
        <legend>ค้นหาข้อมูล</legend>
        <div   class="row">
            <div   class="form-group">
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label class="control-label" >เลขที่โปรโมชั่น</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <input type="text"  class="form-control input-sm" name="cboShEntityBranch"  >
                </div>
 
            </div>
    </div>
        <div   class="row">
            <div   class="form-group">
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label class="control-label">วันที่เริ่ม</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <input type="text"  class="form-control" name="cboShEntityBranch"  >
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label class="control-label">ถึง วันที่:</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <input type="text"  class="form-control" name="cboShEntityBranch"  >
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                </div>
            </div>
        </div>
        <div   class="row">
            <div   class="form-group">
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label class="control-label">สถานะเอกสาร</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <input type="text"  class="form-control input-sm" name="cboShEntityBranch"  >
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">

                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">

                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                </div>
            </div>
        </div>
        <div   class="row">
            <div  class="col-xs-12 col-sm-12 col-md-12">
                <a class="btn btn-info" id="btnSearch" href="#">
                    <i class="clip-search"></i>
                     ค้นหา
                </a>
                <input type="reset" class="btn btn-orange" value="เคลียร์" />
            </div>
        </div>
        <div   class="row">

        </div>
    </fieldset>
</div>
    <div class="container">
         <legend></legend>
    </div>

    <div class="container">
        <table class="table table-bordered top20">
                <a href="#" rel="newpromotiondiscount1111" class="btn btn-md btn-primary"><i class="fa fa-plus-square-o"></i> Add Discount</a>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>เลขที่โปรโมชั่น</th>
                    <th>ชื่อโปรโมชั่น</th>
                    <th>วันที่เริ่ม</th>
                    <th>วันที่สิ้นสุด</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">MBS2015001</a></td>
                    <td>Sealy Brand Sale # 2 Mail Super Shock</td>
                    <td>28/05/2558</td>
                    <td>20/06/2558</td>
                    <td class="col-md-3">
                        <a href="#" class="btn btn-sm btn-primary">แก้ไข</a>
                        <a href="#" class="btn btn-sm btn-success">พิมพ์</a>
                        <a href="#" class="btn btn-sm btn-danger">ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="#">MBS2015002</a></td>
                    <td>Grand Openning</td>
                    <td>27/05/2558</td>
                    <td>30/06/2558</td>
                    <td class="col-md-3">
                        <a href="#" class="btn btn-sm btn-primary">แก้ไข</a>
                        <a href="#" class="btn btn-sm btn-success">พิมพ์</a>
                        <a href="#" class="btn btn-sm btn-danger">ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="#">MBS2015003</a></td>
                    <td>Sealy LUXE Living Sale UP to 60% off</td>
                    <td>09/12/2558</td>
                    <td>22/12/2558</td>
                    <td class="col-md-3">
                        <a href="#" class="btn btn-sm btn-primary">แก้ไข</a>
                        <a href="#" class="btn btn-sm btn-success">พิมพ์</a>
                        <a href="#" class="btn btn-sm btn-danger">ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a href="#">MBS2015004</a></td>
                    <td>Mail 16  Bedroom # 2</td>
                    <td>21/12/2558</td>
                    <td>13/01/2559</td>
                    <td class="col-md-3">
                        <a href="#" class="btn btn-sm btn-primary">แก้ไข</a>
                        <a href="#" class="btn btn-sm btn-success">พิมพ์</a>
                        <a href="#" class="btn btn-sm btn-danger">ลบ</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



    <!-- Modal Customer -->

    <div class="modal fade promotiondiscount_class" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="promotiondiscount_id">
                
            </div>
        </div>
    </div>





@stop