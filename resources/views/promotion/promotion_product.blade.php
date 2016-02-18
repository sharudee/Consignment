@extends('include.index')
@section('title_page') Sales - @stop

@section('content')



	<h1><i class="fa fa-list"></i> 5555555</h1>
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
		<table class="table table-bordered top10">
				<a href="#" rel="newpromotionproduct" class="btn btn-md btn-primary"><i class="fa fa-plus-square-o"></i> Add Product</a>

			<thead>
				<tr>
					<th>ID</th>
					<th>เลขที่โปรโมชั่น</th>
					<th>ชื่อโปรโมชั่น</th>
					<th>ชุดเซ็ทสินค้า</th>
					<th>รุ่น</th>
                    <th>ขนาด</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><a href="#">MBS2015001</a></td>
					<td>Sealy Brand Sale # 2 Mail Super Shock</td>
					<td>SET01</td>
					<td>EVEREST</td>
                    <td>6x6.5</td>
					<td class="col-md-3">
						<a href="#" class="btn btn-sm btn-primary">แก้ไขสินค้า</a>
					</td>
				</tr>
                <tr>
                    <td>1</td>
                    <td><a href="#">MBS2015001</a></td>
                    <td>Sealy Brand Sale # 2 Mail Super Shock</td>
                    <td>SET02</td>
                    <td>KINGDOM</td>
                    <td>6x6.5</td>
                    <td class="col-md-3">
                        <a href="#" class="btn btn-sm btn-primary">แก้ไขสินค้า</a>
                    </td>
                </tr>
			</tbody>
		</table>
	</div>



	<!-- Modal Customer -->

	<div class="modal fade promotionProduct_class" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" id="promotionProduct_id">
				
			</div>
		</div>
	</div>





@stop