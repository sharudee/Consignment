


<!DOCTYPE html>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->




    <!-- Bootstrap -->

    <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('resources/assets/css/font-awesome.min.css') }}">


    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="../Content/js/html5shiv.min.js"></script>
      <script src="../Content/js/respond.min.js"></script>
      <script src="../Content/js/jscheckboxpatchIE8.js"></script>
    <![endif]-->

    
     <script src="<?php echo URL::to('resources/assets/js/marquee.js');?>"></script>

<title>MCS</title>
<link rel="icon" href="<?php echo URL::to('resources/assets/img/mcs_logo.ico');?>">
    <style type="text/css">
        /*html, body {
            height: 100%;
            font-family: 'THSarabunNew','Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #817f82;
            background-color: white;
        }*/
        form{
            height:100%
        }
        .marquee a{
            color:#BE1E2D;
        }
        a.chgpass{
            color:#F7941D;
        }
        a.chgpass:visited {
            color: #F7941D;
        }
        a.chgpass:hover {
            color: #F7941D;
            text-decoration:underline;
            cursor:pointer;
        }
        a.chgpass:active {
            color: #F7941D;
        }
        .container-padding {
            padding: 0 0 50px 0;
        }
        .footer1-padding {
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .container-fluid {
            padding: 0;
            height: 100%;
            background-color: #eeeeee;
        }
        .container-fluid-header {
            padding: 0;
            height: 50%;
            min-height: 300px;
            /*min-height:400px;*/
        }
        .container-fluid-footer {
            padding: 0;
            height: 50%;
        }
        .container-header1
        {
            height:65px;
            /*height:23%;*/
        } 
        .container-header2
        {
            height:35%;
        }
        .container
        {
            max-width:600px;
        }
        .container-footer1 {
            height: 75%;
            background-color: #f6f6f6;
            min-height: 280px;
        }
        .container-footer2
        {
            height:25%;
            min-height:110px;
            background-color:#eeeeee;
        }
        .deco-linegreen {
            background-color: #1D7634;
        }
        .deco-lineblue {
            background-color: #00529E;
        }
        .deco-lineyellow {
            background-color: #FA9900;
        }
        .deco-linered {
            background-color: #A70908;
        }
        .deco-height3 {
            height:5px;
        } 
        .row {
            overflow: hidden;
            margin: 0;
        }

        [class*="col-"] {
            margin-bottom: -99999px;
            padding-bottom: 99999px;
        }
        .textbox {
            border: 1px solid #ececec;
            outline: 0;
            padding: 0px 5px 0px 5px;
            height: 25px;
            width: 275px;
            background-color: #eeeeee;
        }
        .btn-hmp-primary {
            background-color: #0054a6;
            border-color: #00488e;
            border-radius: 12px;
            padding: 0px 24px;
        }
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.focus,
        .btn-primary:active,
        .btn-primary.active {
            color: #fff;
            background-color: #004990;
            border-color: #003C76;
        }
        .btn-hmp-default {
            background-color: #adadad;
            border-color: #999999;
            border-radius: 12px;
            padding: 0px 24px;
            color: white;
        }
        .font-footer1 {
            font-size: 12px;
            line-height: 22px;
        }
        .marquee {
          width: 100%;
          line-height:1.5;
          overflow: hidden;
        }
        .overflow {
          text-overflow: ellipsis;
          white-space: nowrap;
          overflow: hidden;
        }
        .vertical-align {
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: row;
        }
        #header-sysName{
            color: #8EC93D; 
            font-size: 25px;
            font-family: 'robotobold', Helvetica, Arial, sans-serif;
            font-size:28px;
        }
        @media screen and (max-width: 992px) {
            html, body {
                background-color:#7cbeff;
            }

            .bs-callout+.bs-callout{
                margin-top: 7px;
            }
            .bs-callout{
                padding: 8px
            }

            .container-header1 {
                height: 10%;
            }

            .container-header2 {
                height: 15%;
            }

            .container-fluid-header {
                height: 440px;
            }

            .container-footer1 {
                height: 75%;
                background-color: #f6f6f6;
                min-height: 355px;
            }

            .container-footer2 {
                height: 25%;
                min-height: 165px;
                background-color: #eeeeee;
            }

            .footer1-padding {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }

    </style>
<body>

<form method="POST" action="{{url('admin/loginprocess')}}" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'BTN_SUBMIT')" id="form1">
<input type ="hidden" name="_token"  value="{{csrf_token()}}">


    <div class="container-fluid-header">
        <div id="div_stickyContainer" class="container-header2">
            <div class="row">
                <div class="col-md-12">
                    
                        
                        
                    
                    
    <div class="well bs-callout bs-callout-info">
       <div class="marquee">

       </div>
    </div>
                </div>
            </div>
        </div>
        <div class="container container-padding">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo URL::to('resources/assets/img/mcs_logo.png');?>" style="max-width: 200px" class="img-responsive center-block"/>
                        </div>
                        <div class="col-md-12" style="margin-top:-20px;">
                            <h2 class="text-center">
                           
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="HDF_ismobile" id="HDF_ismobile" value="0" />
                    <div style="width: 275px" class="center-block">
                            @if(Session::has('message'))
                            <div class="panel-body bg-danger color-red">
                                {{Session::get('message')}}
                            </div>
                            @endif

                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                            <input name="username" type="text" id="username" class="form-control" placeholder="UserName" autofocus />
                            
                        </div>
                        {!!$errors->first('username', '<span  class="alert-danger">*:message</span>')!!}
                        <div style="margin: 10px;"></div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input name="password" type="password" id="password" class="form-control" placeholder="Password" />
                            
                        </div>
                        {!!$errors->first('password', '<span  class="alert-danger">*:message</span>')!!}
                    </div>
                    
                    <div id="panLanguage" style="width: 170px; margin-top: 20px;" class="center-block">
                        
                        <input value="th-TH" name="RDO_LANG" type="radio" id="RDO_Thai" class="css-checkbox" onclick="$(&#39;form:first&#39;).submit();" checked="checked" />
                        <label for="RDO_Thai" class="css-label radGroup1 radGroup1 chk">ภาษาไทย</label>
                        
                        <input value="en-US" name="RDO_LANG" type="radio" id="RDO_Eng" class="css-checkbox" onclick="$(&#39;form:first&#39;).submit();" />
                        <label for="RDO_Eng" class="css-label radGroup1 radGroup1">English</label>
                    </div>
                    <div style="width: 205px; margin-top: 20px;" class="center-block">
                   
                        <input type="submit" name="#" value="LOGIN" id="#" class="btn btn-primary btn-hmp-primary" />
                        <input type="reset" name="BTN_RESET" value="RESET" id="BTN_RESET" class="btn btn-primary btn-hmp-primary" />
                
                    </div>
                    <div id="panChgpass" class="text-center" style="margin-top: 5px;"><a href="logon.aspx?chg=pass" class="chgpass">Change password</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid-footer">
        <div class="container-footer1">
            <div class="row">
                <div class="col-xs-3 deco-linegreen">
                    <div class="deco-height3"></div>
                </div>
                <div class="col-xs-3 deco-lineblue">
                    <div class="deco-height3"></div>
                </div>
                <div class="col-xs-3 deco-lineyellow">
                    <div class="deco-height3"></div>
                </div>
                <div class="col-xs-3 deco-linered">
                    <div class="deco-height3"></div>
                </div>
            </div>
            <div class="row vertical-align" style="height: 100%;">
                <div class="col-md12 text-center">
                    <div class="row font-footer1">
                        <div id="test1" class="col-md12 text-center" style="font-weight: bolder;">ข้อแนะนำสำคัญ : </div>
                        <div id="test2" class="col-md12 text-center">USER และ PASSWORD มีความสำคัญต่อธุรกิจและข้อมูลของท่าน</div>
                        <div class="col-md12 text-center">กรุณาอย่าลืม!! และควรเก็บเป็นความลับ โดยให้ทราบเฉพาะบุคคลที่ต้องใช้งานเท่านั้น ที่สำคัญควรเปลี่ยนรหัสผ่านทุกครั้งที่เปลี่ยนบุคลากร</div>
                        <div class="col-md12 text-center">ทุกครั้งที่ท่านขอ PASSWORD ใหม่ โปรดแจ้งมายัง Email: itcenter@jaspalhome.com </div>
                        <div class="col-md12 text-center">
                            <div style="padding: 15px 0 15px 0;">
                                <a href="../data/แบบคำร้องขอ Password ระบบ VRM HomePro.docx" style="font-size: 11px;" class="btn btn-default btn-hmp-default">แบบคำร้องขอ PASSWORD ระบบ MCS System</a>
                                
                            </div>
                        </div>
                        <div class="col-md12 text-center">ระบบนี้สามารถใช้งานได้กับ GOOGLE CHROME, FIREFOX และ INTERNET EXPLORER BROWSER (IE) 9-11</div>
                        <div class="col-md12 text-center"><b>หากมีปัญหาการใช้งานระบบ MCS</b></div>
                        <div class="col-md12 text-center"><b>โปรดติดต่อศูนย์ช่วยเหลือผู้ใช้งาน (IT Helpdesk)</b></div>
                        <div class="col-md12 text-center"><b>E-MAIL: itcenter@jaspalhome.com  โทร. 02-312-6800 ต่อ 5101-5108 เวลา 7.45:00-16:45 น. ในวันจันทร์ถึงวันศุกร์</b></div>
                       
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container-footer2">
            <div class="row">
                <div class="col-md12">
                    <div style="padding-top: 15px;" class="font-footer1">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div style="padding: 15px 0 0 0;">
                                    Copyright© 2015 Jaspalhome All right reserved Thailand Web Stat [ Version 1.00 ]
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    


</form>


</body>
</html>
