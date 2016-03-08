@extends('include.index')
@section('title_page') Promotion Infomation - @stop

@section('content')

<div class="col-md-12">
    <h3><i class="fa fa-list"></i> บันทึกข้อมูล ข้อมูลโปรโมชั่น</h3>
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
                                <form class="form-horizontal" role="form" method="GET" action="{{url('search-promotion')}}">
                                    <div   class="row">
                                        
                                        <div   class="form-group">
                                            <div class="col-xs-12 col-sm-2 col-md-2">
                                                <label class="control-label">เลขที่/ชื่อโปรโมชั่น</label>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 col-md-8">
                                                <input type="text"  class="form-control" name="search" id="search" >
                                            </div>
                                        </div>
                                    </div>
                                        <div   class="row">
                                            <div   class="form-group">
                                                <div class="col-xs-12 col-sm-2 col-md-2">
                                                    <label class="control-label">วันที่เริ่ม</label>
                                                </div>
                                         
                                                <div class="col-xs-12 col-sm-3 col-md-3">
                                                    <input type="text"  name="searchpmtstartdate" id="searchpmtstartdate" class="form-control input-sm required" value="<?php echo date('d/m/Y'); ?>" readonly>
                                                </div>

                                                <div class="col-xs-12 col-sm-2 col-md-2">
                                                    <label class="control-label">ถึง วันที่</label>
                                                </div>
                                   
                                                <div class="col-xs-12 col-sm-3 col-md-3">
                                                    <input type="text"  name="searchpmtenddate" id="searchpmtenddate" class="form-control input-sm required" value="<?php echo date('d/m/Y'); ?>" readonly>
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
                                                    data-href="http://localhost/cos/promotion_obj">
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





        <a href="#" rel="newpromotion" class="btn btn-md btn-primary"><i class="fa fa-plus-square-o"></i>New Promotion</a>
        <legend></legend>

        <div id="ajaxTable" class="table-responsive">
            @include('promotion.promotion_contact_lv')
        </div> 

</div>
    <!-- Modal Customer -->

    <div class="modal fade promotionmodal" data-backdrop="static">
      <div class="modal-dialog modal-lg">
         <div class="modal-content" id="promotionmodal">
         </div>
     </div>
    </div>

 @include('modals.promotion_add_form_edit_modal')

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


     
                       