@extends('include.index')
@section('title_page') Promotion Infomation - @stop

@section('content')


   

 <div class="col-md-12">
     <h3><i class="fa fa-list"></i>กำหนดสิทธ์ การใช้เมนู</h3> 
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
                                    <form class="form-horizontal" role="form" method="GET" action="{{url('search-role')}}">
                                        <div   class="row">
                                            <div   class="form-group">
                                                <div class="col-xs-12 col-sm-2 col-md-2">
                                                    <label class="control-label">รหัส/ชื่อสิทธิ์</label>
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
                @include('admin.rolemenu_lv') 
            </div> 

</div>

@include('modals.modal-crud-comm')

    <!-- Modal Customer -->

    <div class="modal fade rolemenu_modal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="rolemenu_modal">
                
            </div>
        </div>
    </div>
    <div class="modal fade popup_system_modal" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="popup_system_modal">
                
            </div>
        </div>
    </div>

    <div class="modal fade popup_system_menu" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="popup_system_menu">
                
            </div>
        </div>
    </div>

    <div class="modal fade popup_memu_by_system" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="popup_memu_by_system">
                
            </div>
        </div>
    </div>
@stop
