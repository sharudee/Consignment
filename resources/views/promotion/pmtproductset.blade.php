@extends('include.index')
@section('title_page') Promotion Infomation - @stop

@section('content')


 <div class="col-md-12">
<h3><i class="fa fa-list"></i> กำหนดชุดเซ็ทสินค้า</h3>
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
                                <form class="form-horizontal" role="form" method="GET" action="{{url('search-Productset')}}">
                                    <div   class="row">
                                        <div   class="form-group">
                                            <div class="col-xs-12 col-sm-2 col-md-2">
                                                <label class="control-label">รหัส/ชื่อชุดสินค้า/กลุ่ม</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                <input type="text"  class="form-control" name="search" id="search"  >
                                            </div>
                                        </div>
                                    </div>
                                    <div   class="row">
                                        <div   class="form-group">
                                            <div class="col-xs-12 col-sm-2 col-md-2">
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                <button type="submit" class="btn btn-sm btn-info solsoShowModal"  
                                                    data-toggle="modal" data-target="#solsoDeleteModal" >
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
        </div>
    </div>

            <a href="#" rel="newproductsetform" class="btn btn-md btn-primary"><i class="fa fa-plus-square-o"></i>เพิ่ม ชุดสินค้า</a>
            <legend></legend>

                <div id="ajaxTable" class="table-responsive">
                    @include('promotion.pmtproductset_lv') 
                </div> 

 
</div>
@include('modals.modal-crud-productset')

    <!--1 Modal New  Head- Detail FORM  Product Set-->
    <div class="modal fade productsetmodal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="productsetmodal">
                
            </div>
        </div>
    </div>


    <!--2 Modal  Group Master Data-->
    <div class="modal fade popup_mstgrpmodal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="popup_mstgrpmodal">
                
            </div>
        </div>
    </div>

    <!--3 Modal UOM-->
    <div class="modal fade mstuommodal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="mstuommodal">
                
            </div>
        </div>
    </div>

    <!--4 Modal pdmodel_code-->
    <div class="modal fade pdmodelmodal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="pdmodelmodal">
                
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

    <!--6 Modal pdgrp_code-->
    <div class="modal fade pdgrp_code_modal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="pdgrp_code_modal">
                
            </div>
        </div>
    </div>

    <!--7 Modal pdbrnd_code-->
    <div class="modal fade pdbrnd_code_modal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="pdbrnd_code_modal">
                
            </div>
        </div>
    </div>

     <!--8 Modal pdcolor_code-->
    <div class="modal fade pdcolor_code_modal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="pdcolor_code_modal">
                
            </div>
        </div>
    </div>  

    <!-- 9 Modal pddsgn_code-->
    <div class="modal fade pddsgn_code_modal" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="pddsgn_code_modal">
                
            </div>
        </div>
    </div>

    <!--10 Modal Product-->
    <div class="modal fade productmodal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="productmodal">
                
            </div>
        </div>
    </div>


@stop


@section('scripts')
 <script type="text/javascript">
        $(document).ready(function(){

            //Alert confirm delete
            $('.formDelete').submit(function() {
                var c = confirm("ท่านกำลังลบรายการข้อมูล กรุณายืนยันโดยกดปุ่ม ''ตกลง''?");
                return c;
            });
        });
    </script>
@stop