@extends('include.index')
@section('title_page') Promotion Infomation - @stop

@section('content')


   

 <div class="col-md-12">
     <h3><i class="fa fa-list"></i>กำหนดการเข้า ห้าง-ร้าน</h3> 
            <div class="panel-group accordion-custom accordion-teal">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <i class="fa fa-plus-square-o"></i>
                            ระบุเงื่อนไขการค้นหา ข้อมูล
                        </a></h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="container">
                                <fieldset>
                                    <form class="form-horizontal" role="form" method="GET" action="{{url('search-user')}}">
                                        <div   class="row">
                                            <div   class="form-group">
                                                <div class="col-xs-12 col-sm-2 col-md-2">
                                                    <label class="control-label">รหัสผู้ใช้/ชื่อ/เบอร์โทร</label>
                                                </div>
                                                <div class="col-xs-12 col-sm-8 col-md-8">
                                                    <input type="text"  class="form-control" name="search" id="search">
                                                </div>
                                            </div>
                                        </div>
                                        <div   class="row">
                                            <div   class="form-group">
                                                <div class="col-xs-12 col-sm-2 col-md-2">
                                                </div>
                                                <div class="col-xs-12 col-sm-8 col-md-8">
                                                    <button type="submit" class="btn btn-info btn-sm solsoShowModal"  
                                                        data-toggle="modal" data-target="#solsoDeleteModal" 
                                                        data-href="">
                                                        <i class="fa fa-search"></i>  ค้นหา
                                                    </button>

                                                    <button type="reset" value="Reset" class="btn btn-sm btn-warning solsoShowModal"  
                                                        data-toggle="modal" data-target="#solsoDeleteModal" 
                                                        data-href="#">
                                                        <i class="fa fa-eraser"></i>   เคลียร์
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                </div>
 



            <div id="ajaxTable" class="table-responsive top10">
                @include('admin.entityuser_lv') 
            </div> 

</div>

@include('modals.modal-crud-comm')

    <!-- Modal Customer -->
    <div class="modal fade pop_cust_allow_form" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="pop_cust_allow_form">
                
            </div>
        </div>
    </div>

    <div class="modal fade cust_modal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="cust_modal">
                
            </div>
        </div>
    </div>
    <div class="modal fade popup_entity_modal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="popup_entity_modal">
                
            </div>
        </div>
    </div>  

    <div class="modal fade consignnee_grp_modal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="consignnee_grp_modal">
                
            </div>
        </div>
    </div>




@stop
