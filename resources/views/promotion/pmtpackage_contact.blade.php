@extends('include.index')
@section('title_page') Sales - @stop

@section('content')



 @foreach($data_h_obj_info as $crt => $v)
    <h4 style="color:blue"><i class="fa fa-list"></i>รายละเอียด แพคเกจ ::{{$v->pmt_no}} ::{{$v->pmt_name}}</h4>
 @endforeach
    <div class="col-md-12">

                <button type="button" class="btn btn-primary solsoShowModal"  
                data-toggle="modal" data-target="#solsoCrudModal" 
                data-href="{{URL::to('addnewpmtpackageform/'.$v->pmt_mast_id.'/')}}" data-modal-title="ห้างจัดรายการ (เลขที่โปรโมชั่น::{{$v->pmt_no}}::{{$v->pmt_name}})" >
                <i class="fa fa-plus-square-o"></i> เพิ่ม แพคเกจ</button>

                <div class="row">
                    <div class="col-md-12 top10">
                        <fieldset></fieldset>
                        <div id="ajaxTable" class="table-responsive">
                            <table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($data_obj_info)}}">
                                        <thead>
                                            <tr>
                                                <th class="col-sm-3">รุ่น</th>
                                                <th class="col-sm-2">ขนาด</th>
                                                <th class="col-sm-1">ราคา</th>
                                                <th class="col-sm-1">มูลค่าของแถม</th>
                                                <th class="col-sm-1">มูลค่าทั้งชุด</th>
                                                <th class="col-sm-1">ราคาพิเศษ</th>
                                                <th class="col-sm-1">ราคาลดพิเศษ</th>
                                                <th class="col-sm-1"></th>
                                                <th class="col-sm-1"></th>
                                            </tr>
                                        </thead>
                                <tbody>
                                    @foreach($data_obj_info as $crt => $v)
                                    <tr>
                                        
                                        <td class="col-sm-3">{{$v->pdmodel_desc}}</td>
                                        <td class="col-sm-2">{{$v->pdsize_desc}}</td>     
                                        <td class="col-sm-1">{{$v->package_unit_price}}</td>   
                                        <td class="col-sm-1">{{$v->pm_total_price}}</td> 
                                        <td class="col-sm-1">{{$v->total_price_amt}}</td> 
                                        <td class="col-sm-1">{{$v->special1_price_amt}}</td> 
                                        <td class="col-sm-1">{{$v->special2_price_amt}}</td> 
                                        <td class="col-xs-1 col-sm-1 col-md-1">
                                            <button type="button" class="btn btn-primary btn-sm solsoShowModal"  
                                            data-toggle="modal" data-target="#solsoCrudModal"   rel="editpmtgrpmast" data-edittransactionid="{{$v->package_mast_id}}"
                                            data-href="{{URL::to('editpmtpackageform/'.$v->pmt_mast_id.'/'.$v->package_mast_id.'/' )}}" data-modal-title="แก้ไข แพคเกจ ::{{$v->pmt_no}} ::{{$v->pmt_name}}">
                                            <i class="fa fa-pencil"></i>Edit</button>
                                        </td>
                                        <td class="col-xs-1 col-sm-1 col-md-1">
                                            <button type="button" class="btn btn-danger btn-sm solsoShowModal"  
                                            data-toggle="modal" data-target="#solsoCrudModal"   rel="editpmtgrpmast" data-edittransactionid="{{$v->package_mast_id}}"
                                            data-href="{{URL::to('deletepmtpackageform/'.$v->pmt_mast_id.'/'.$v->package_mast_id.'/' )}}" data-modal-title="ลบ แพคเกจ ::{{$v->pmt_no}} ::{{$v->pmt_name}}">
                                            <i class="fa fa-trash"></i>Del</button>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> 
                    </div>
                <div>
</div>
@include('modals.modal-crud-productset')
<div class="modal fade pdmodelmodal2" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content" id="pdmodelmodal2">
            
        </div>
    </div>
</div> 

     <!--5 Modal pdsize_code-->
    <div class="modal fade pdsize_code_modal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="pdsize_code_modal">
                
            </div>
        </div>
    </div>   
 
     <!--5 Modal pdsize_code-->
    <div class="modal fade product_set_modal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="product_set_modal">
                
            </div>
        </div>
    </div>   

     <!--5 Modal pdsize_code-->
    <div class="modal fade product_premuim_set_modal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="product_premuim_set_modal">
                
            </div>
        </div>
    </div>   

@stop

