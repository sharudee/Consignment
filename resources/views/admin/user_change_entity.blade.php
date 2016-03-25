
@extends('include.index')
@section('title_page') Promotion Infomation - @stop

@section('content')

<div class="col-md-12">
   <h3><i class="fa fa-list"></i>เปลี่ยน Entity , ห้าง-ร้าน</h3> 
    <legend></legend>
        <a href="#" rel="change_entity" class="btn btn-md btn-primary"><i class="fa fa-sign-in"></i>Logon Entity</a>
   <legend></legend>

</div>




@include('modals.modal-crud-comm')
    <div class="modal fade change_entity_modal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="change_entity_modal">
                
            </div>
        </div>
    </div>

      <div class="modal fade entity_and_cust_allow_modal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="entity_and_cust_allow_modal">
                
            </div>
        </div>
    </div>

    <div class="modal fade popup_dept_modal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="popup_dept_modal">
                
            </div>
        </div>
    </div>
@stop
