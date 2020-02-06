<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="Description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <link rel="icon" href="images/icon/favicon.png" type="image/png"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link rel="stylesheet" type="text/css" href="css/page.css">

        <!-- CSS for IE -->
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
        <![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login" style="background: url(images/banner-login.png);">
        <div class="overlay"></div>
        <div class="clearfix"></div>
        <div class="height-100"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading text-center pb-2">
                    <img class="img-fluid" src="images/logo.png" alt="">
                    <h3 class="color2 mt-2">ขอรหัสผ่านใหม่</h3>
                    <p>อีเมลพร้อม URL สำหรับรีเซ็ทรหัสผ่านจะถูกส่งไปยังอีเมลที่ท่านได้ลงทะเบียนไว้ <br> กรุณากรอก ล็อกอินไอดี และอีเมลของท่าน และคลิก <span class="color2">“ส่ง”</span></p>
                </div>


                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="">ล็อกอินไอดี</label>
                                <input class="form-control username" type="text"  placeholder="Demo">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="">อีเมล</label>
                                <input class="form-control email" type="email"  placeholder="example@mail.com">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 text-left">
                                <button type="button" class="btn btn-4 btn-alert" >ส่ง</button> 
                            </div>
                            <div class="col-sm-12 text-left mt-3">
                               <a href="login.php" class="underline  color-black">กลับไปหน้าล็อคอิน</a>
                            </div>
                             
                        </div>

                    </form>

                </div>

            </div>
                        
        </div>

        <!-- Modal Alert-->
        <div class="modal fade bd-example-modal-lg alert" id="alert_success" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <img src="images/icon/icon-alert-close.png">
                </button>
              </div>
              <div class="modal-body text-center">
                    <img width="70" src="images/icon/icon-mgs.png">
                    <h5 class="color2 mt-4">รหัสใหม่ถูกส่งไปยังอีเมลของท่านเรียบร้อยแล้ว</h5>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Alert-->
        <div class="modal fade bd-example-modal-lg alert" id="alert_cancle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <img src="images/icon/icon-alert-close.png">
                </button>
              </div>
              <div class="modal-body text-center">
                    <img width="70" src="images/icon/icon-cancle.png">
                    <h5 class="color-red mt-4">กรุณาใส่ ล็อคอินไอดี และ อีเมล</h5>
              </div>
              <div class="modal-footer">
                
              </div>
            </div>
          </div>
        </div>

    </body>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 

        <script type="text/javascript">

            $( ".btn-alert" ).click(function() {
               
                var username = $('.username').val();
                var email = $('.email').val();

                if (username == "" || email == "" ) {
                    $('#alert_cancle').modal('show');
                }else{
                    $('#alert_success').modal('show');
                }
              
            });

        </script>

</html>      