@extends('include.index')
@section('title_page') Promotion Infomation - @stop

@section('content')


   

<div class="col-md-12">
   <h3><i class="fa fa-list"></i>เปลี่ยนรหัสผ่านใหม่</h3> 
    <legend></legend>
        <a href="#" rel="repassword" class="btn btn-md btn-primary"><i class="fa fa-plus-square-o"></i>เปลี่ยนรหัสผ่าน</a>
   <legend></legend>

</div>

    <div class="modal fade repasswordmodal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="repasswordmodal">
                
            </div>
        </div>
    </div>

@include('modals.modal-crud-comm')

@stop
