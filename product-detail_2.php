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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" href="css/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

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
    <body>
        <!-- START TOPBAR -->
        <section>
            <div class="container-fluid">
                <div class="topbar">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 left">
                                <a class="logo" href="index.php"><img src="images/logo.png" alt=""></a>

                                <a class="side-icon  d-sm-block d-md-none" href="cart.php" >
                                    <img src="images/icon/icon-gray-cart.png" alt="">
                                    <span class="badge badge-custom">44+</span>
                                </a>
                            </div>
                            <div class="col-lg-6 right text-right  d-none d-md-block">
                                <a class="color1" href="#">สำหรับผู้ใช้งาน</a>
                                <a class="color1" href="#">สำหรับผู้ดูแลระบบ</a>
                                <a class="color1" href="policy.php">เงื่อนไข</a>
                                <a class="color1" href="login.php">ออกจากระบบ <img width="11px" src="images/icon/icon-gray-logout.png" alt=""></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>     
        <!-- END TOPBAR -->

        <!-- START CONTENT -->
        <section class="">
            <div class="container-fluid">
                <div class="wrapper row">
                    <div class="col-md-4 col-lg-4 col-xl-3">
                        <?php include '_sidebar.php';?>
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-9">
                        <!-- Top menu desktop -->
                        <nav class="navbar navbar-expand-lg bg2 d-none d-md-block">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-align-justify"></i>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">หน้าแรก</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="search.php">ค้นหา</a>
                                </li> -->

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="reward.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    คะแนน
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="reward.php">ตรวจสอบคะแนน</a>
                                        <a class="dropdown-item" href="reward-history.php">ประวัติการใช้คะแนน</a>
                                        <a class="dropdown-item" href="reward-rule.php">เกณฑ์ของ Award Point</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="account.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">บัญชีผู้ใช้</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="account.php">ข้อมูลส่วนตัว</a>
                                        <a class="dropdown-item" href="account-address.php">ที่อยู่ผู้รับสินค้า</a>
                                        <a class="dropdown-item" href="account-email.php">เปลี่ยนอีเมล</a>
                                        <a class="dropdown-item" href="account-change-password.php">เปลี่ยนรหัสผ่าน</a>
                                        <a class="dropdown-item" href="account-remember.php">ระบบช่วยจำรหัสผ่าน</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="thank-point.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Thanks Point
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="thank-point.php">การมอบ Thanks Point</a>
                                        <a class="dropdown-item" href="thank-point-history.php">ประวัติการรับและมอบคะแนน</a>
                                    </div>
                                </li>
                                </ul>
                                <form class=" my-2 mr-1 my-lg-0 help help-box-button">
                                    
                                    <a href="#" class="">
                                            <img width="20" src="images/icon/icon-help.png" alt=""><br>
                                            ติดต่อ - สอบถาม
                                    </a>

                                </form>
                                <form class=" my-2 my-lg-0 help">
                                    <a href="helper.php">
                                        <img width="20" src="images/icon/icon-help.png" alt=""><br>
                                        ช่วยเหลือ
                                    </a>
                                </form>
                            </div>
                            <div class="help-box">
                                <div class="help-top">
                                    คำถาม / ต้องการข้อมูล 

                                    <select>
                                        <option>เกี่ยวกับเว็บไซต์</option>
                                        <option>สอบถามบริษัทของท่าน</option>
                                        <option>สินค้าที่ต้องการ</option>
                                        <option>เกี่ยวกับรายละเอียดสินค้า</option>

                                    </select>

                                    <a class="close" href="#"><img src="images/icon/icon-white-close.png"></a>
                                </div>
                                <div class="help-body">
                                    <label>ส่งคำถามต่างๆถึงเรา</label>
                                    <textarea class="form-control" row="7" >
                                        
                                    </textarea>

                                    <button class="btn btn-1 my-3">ส่ง</button>
                                </div>

                                <div class="arrow-up"></div>
                            </div>
                        </nav>
                        <!-- END menu desktop -->
                        <!-- Top menu mobile -->
                        <nav class="navbar navbar-expand-lg bg2 d-block d-md-none">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo04" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-align-justify"></i>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo04">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">หน้าแรก</a>
                                </li>
                            

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="reward.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    คะแนน
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="reward.php">ตรวจสอบคะแนน</a>
                                        <a class="dropdown-item" href="reward-history.php">ประวัติการใช้คะแนน</a>
                                        <a class="dropdown-item" href="reward-rule.php">เกณฑ์ของ Award Point</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="account.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">บัญชีผู้ใช้</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="account.php">ข้อมูลส่วนตัว</a>
                                        <a class="dropdown-item" href="account-address.php">ที่อยู่ผู้รับสินค้า</a>
                                        <a class="dropdown-item" href="account-email.php">เพิ่มอีเมล</a>
                                        <a class="dropdown-item" href="account-change-password.php">เปลี่ยนรหัสผ่าน</a>
                                        <a class="dropdown-item" href="account-remember.php">ระบบช่วยจำรหัสผ่าน</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="thank-point.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Thanks Point
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="thank-point.php">การมอบ Thanks Point</a>
                                        <a class="dropdown-item" href="thank-point-history.php">ประวัติการรับและมอบคะแนน</a>
                                    </div>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="login.php">ออกจากระบบ</a>
                                </li>
                                </ul>
                                <form class=" my-2 mr-1 my-lg-0 help help-box-button">
                                    
                                    <a href="#" class="">
                                            <img width="20" src="images/icon/icon-help.png" alt=""><br>
                                            ติดต่อ - สอบถาม
                                    </a>

                                </form>
                                <form class=" my-2 my-lg-0 help">
                                    <a href="helper.php">
                                        <img width="20" src="images/icon/icon-help.png" alt=""><br>
                                        ช่วยเหลือ
                                    </a>
                                </form>
                            </div>
                            <div class="help-box">
                                <div class="help-top">
                                    คำถาม / ต้องการข้อมูล 

                                    <select>
                                        <option>เกี่ยวกับเว็บไซต์</option>
                                        <option>สอบถามบริษัทของท่าน</option>
                                        <option>สินค้าที่ต้องการ</option>
                                        <option>เกี่ยวกับรายละเอียดสินค้า</option>

                                    </select>

                                    <a class="close" href="#"><img src="images/icon/icon-white-close.png"></a>
                                </div>
                                <div class="help-body">
                                    <label>ส่งคำถามต่างๆถึงเรา</label>
                                    <textarea class="form-control" row="7" >
                                        
                                    </textarea>

                                    <button class="btn btn-1 my-3">ส่ง</button>
                                </div>

                                <div class="arrow-up"></div>
                            </div>
                        </nav>
                        <!-- END menu mobile -->

                        <div class="hr"></div>

                        <div class="content">
                            <div class="search-wrapper search-custom">
                                <div class="input-group mb-3">

                                    <div class="input-group-prepend ">
                                        <button class="btn btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="d-none d-md-block">หมวดหมู่สินค้า</span>  <span class="d-block d-md-none"><i class="fas fa-align-left"></i></span>
                                        </button>
                                        <div class="dropdown-menu keep-open">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="title">
                                                        <h3 class="color2">เลือกประเภทหมวดสินค้า</h3>
                                                    </div>
                                                    <div class="row list-search search1">
                                                        <div class="col-sm-6  col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ที่พักและท่องเที่ยว</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">เครื่องใช้ไฟฟ้า</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">เครื่องครัว</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">อาหารและเครื่องดื่ม</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">แฟชั่น</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ไลฟ์สไตล์ สุขภาพ</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ความสวยความงาม</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">แฟชั่น</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ไลฟ์สไตล์ สุขภาพ</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ความสวยความงาม</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">แฟชั่น</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ไลฟ์สไตล์ สุขภาพ</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ความสวยความงาม</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">แฟชั่น</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ไลฟ์สไตล์ สุขภาพ</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">ความสวยความงาม</a></div>
                                                    </div>

                                                    <div class="hr"></div>

                                                    <div class="title">
                                                        <h3 class="color2">เลือกหมวดสินค้าย่อย</h3>
                                                    </div>
                                                    <div class="row list-search search2">
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()" class="tags" href="#">โรงแรม</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"><a href="javascript:void()"  class="tags" href="#">ดีลพิเศษ</a></div>
                                                        <div class="col-sm-6 col-md-3 col-xl-2"> <a href="javascript:void()" class="tags" href="#">อุปรกณ์ออกทริป</a></div>
                                                        
                                                    </div>

                                                    <div class="hr"></div>

                                                    <div class="title">
                                                        <h3 class="color2">ค้นหาจากคะแนน</h3>
                                                    </div>
                                                    <div class="row list-search search3 mb-4">
                                                        <div class="col-xl-4 col-lg-4 col-md-12 align-self-center mb-2">
                                                            <span>มากกว่า</span>
                                                            <input type="text" class="form-custom"  placeholder="0">
                                                            คะแนน

                                                            

                                                        </div>
                                                        <div class="col-xl-4 col-lg-4 col-md-12 align-self-center  mb-2">
                                                            <span>น้อยกว่า</span>
                                                            <input type="text" class="form-custom"  placeholder="0">
                                                            คะแนน
                                                            

                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-12 align-self-center  mb-2">
                                                            <label class="container_custom1">
                                                                <input type="checkbox">
                                                                <span class="checkmark"></span>
                                                                ค้นหาสินค้าที่คะแนนต่ำกว่าคุณ
                                                            </label>
                                                            

                                                        </div>

                                                        
                                                        
                                                    </div>

                                                     <div class="hr"></div>

                                                    <div class=" list-search">
                                                        <button onclick="window.location.href='search.php'" class="btn btn-1 mt-3" type="button"><img src="images/icon/icon-white-search.png" alt=""> ค้นหา</button>
                                                        <button class="btn btn-2 mt-3 underline color-gray" type="submit">ล้างค่าการค้นหา</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="ค้นหาสินค้าที่ต้องการ...">
                                    <div class="input-group-append  ">
                                        <span class="input-group-text" id="basic-addon2"><img src="images/icon/icon-white-search.png" alt=""> ค้นหา</span>
                                    </div>
                                </div>
                            </div><!-- search-wrapper -->

                            <div class="product-detail">
                                <div class="product-top bg-gray">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <img class="img-fluid" src="images/product/picture2.png" alt="">
                                        </div>
                                        <div class="col-lg-6">
                                            <h3>Targus 15.6"City Essential Backpack (Grey)</h3>
                                            <div class="small">
                                                รหัสสินค้า : <span class="color3">0005800487</span> <br>
                                                ระยะเวลาที่สามารถใช้คะแนนสั่งสินค้านี้ได้ : <span class="color3">01/01/2018-31/12/2018</span>
                                            </div>

                                            <h4 class="pt-3"><span class="color2 lead">2,000</span> คะแนน รวมบริการจัดส่ง</h4>
                                            <div class="hr"></div>

                                            <p>
                                                ปัจจุบันท่านมีคะแนนคงเหลือ <span class="color2">0</span> คะแนน <br>
                                                ท่านต้องการอีก <span class="color2">1,278</span> คะแนน หรือมากกว่า เพื่อสั่งสินค้าชิ้นนี้
                                            </p>

                                            <div class="hr"></div>

                                            <div class="quantity">
                                                <span class="pr-3">จำนวน</span>
                                                <span class="quantity-num">
                                                    <button class="minus-btn" type="button" name="button">
                                                        -
                                                    </button>
                                                    <input type="text" name="name" value="1">
                                                    <button class="plus-btn" type="button" name="button">
                                                        +
                                                    </button>
                                                </span>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a  class="btn btn-3 " >ใส่ลงตะกร้า</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a  class="btn btn-4 " href="cart.php" >ทำการสั่งสินค้า</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- product-top  -->

                                <div class="product-bottom py-5">
                                    <div class="tabs-custom2">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="home" aria-selected="true">รายละเอียดสินค้า</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#condition" role="tab" aria-controls="profile" aria-selected="false">ข้อกำหนดและเงื่อนไข</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="detail py-3">
                                                กระเป๋าสะพายหลัง จาก Targus เน้นความทนทานและสวยงาม มีช่องสำหรับใส่โน้ตบุ้คขนาดใหญ่สุด 15.6 นิ้ว ใช้วัสดุโพลิเอสเตอร์พร้อมเคลือบกันน้ำ มั่นใจได้ในความปลอดภัย ตัวกระเป๋ายังมาพร้อมกับ แผ่นบุรองหลัง และช่องระบายอากาศ มีสายสะพายไหล่ที่ออกแบบมาเป็นอย่างดี รองรับสรีระของร่ายกายได้อย่างเหมาะสม ที่จับหูหิ้วที่นุ่มสบายมือและแข็งแรง ถูกออกแบบมาสำหรับผู้ใช้ชีวิตในเมือง และผู้ที่รักการเดินทางโดยเฉพาะ ภายในประกอบด้วยช่องสำหรับใส่ แลปท็อป แท็บเล็ต และเครื่องเล่นมัลติมีเดียต่างๆ พื้่นที่พิเศษสำหรับใส่ของใช้ส่วนตัวอย่างกระเป๋าเงิน ขวดน้ำ แว่นตา และสัมภา่ระอื่นๆ สามารถใช้เป็น กระเป๋าสำหรับเดินทางไกล มาพร้อมกับสายรัดที่จะช่วยยึดติด จึงสามารถใช้สะพายหลังหรือใช้มือหิ้วได้อย่างสะดวกสบาย
                                                <br> <br>
                                                <p>Specification</p>
                                                <ul>
                                                    <li><strong>Computer Compatibility Dimension : </strong> Up to 15.6"</li>
                                                    <li><strong>Material :</strong> Polyester</li>
                                                    <li><strong>Country of origin :</strong> China</li>
                                                    <li><strong>Warranty :</strong> Limited Lifetime</li>
                                                    <li><strong>Weight :</strong> 0.89</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="condition" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="condition py-3">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- product-detail -->

                            <div class="home-new-product search-page bg2 mt-5 px-4 py-2 pt-4 ">
                                <div  class="title title2">
                                    <h2 class="color2 text-center"><span class="bg1">สินค้าที่น่าสนใจ</span></h2>                                    
                                </div>

                                <div class="owl-carousel owl-theme owl-carousel-new-product mt-4">
                                     <div class="item">
                                        <a class="product-item color1 color3" href="#">
                                            <div class="p-img">
                                                <img src="images/product/picture5.png" alt="">
                                                <span class="tag new">New</span>
                                            </div>
                                            <div>
                                                <h3 class="color1">บัตรกำนัล ที่พักโรงแรม ช. พาเลส เชียงราย ...</h3>
                                                <div class="cate color3">Catagories / Sub Name</div>
                                                <div class="detail">
                                                    โรงแรม ช. พาเลส เชียงราย มีบรรยากาศแห่งการพักผ่อน 
                                                </div>
                                                <div class="point"><span class="color2">2,000</span> คะแนน</div>
                                                <div class="small color3">รวมบริการจัดส่ง</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-item color1 color3" href="product-detail.php">
                                            <div class="p-img">
                                                <img src="images/product/picture6.png" alt="">
                                            </div>
                                            <div>
                                                <h3 class="color1">แก้วเซรามิก MUG-MR.P&HEART</h3>
                                                <div class="cate color3">Catagories / Sub Name</div>
                                                <div class="detail">
                                                    แก้วเซรามิก MUG-MR.P&HEART
                                                </div>
                                                <div class="point"><span class="color2">2,000</span> คะแนน</div>
                                                <div class="small color3">รวมบริการจัดส่ง</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-item color1 color3" href="product-detail.php">
                                            <div class="p-img">
                                                <img src="images/product/picture7.png" alt="">
                                                <span class="tag new">New</span>
                                            </div>
                                            <div>
                                                <h3 class="color1">ADIDAS หมวก รุ่น S98156 สีดำ</h3>
                                                <div class="cate color3">Catagories / Sub Name</div>
                                                <div class="detail">
                                                    สินค้าลิขสิทธิ์ จาก ADIDAS น้ำหนักเบา สวมใส่สบาย 
                                                </div>
                                                <div class="point"><span class="color2">2,000</span> คะแนน</div>
                                                <div class="small color3">รวมบริการจัดส่ง</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-item color1 color3" href="product-detail.php">
                                            <div class="p-img">
                                                <img src="images/product/picture8.png" alt="">
                                                <span class="tag new">New</span>
                                            </div>
                                            <div>
                                                <h3 class="color1">hoco W5 Mono Headphone # รับประกันสินค้า 6 เดือน</h3>
                                                <div class="cate color3">Catagories / Sub Name</div>
                                                <div class="detail">
                                                    Wearing styles: Headset Microphones size: 6.0x2.7mm

                                                </div>
                                                <div class="point"><span class="color2">2,000</span> คะแนน</div>
                                                <div class="small color3">รวมบริการจัดส่ง</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- home-new-product -->

                        </div>
                        <!-- END CONTENT LEFT -->
                    </div>
                </div>                
            </div>
        </section>
        <!-- END CONTENT -->

   

        <!-- START FOOTER -->
        <section class="bg1" id="footer">
            <div class="footer">
                <div class="row">
                    <div class="col-lg-6">ระบบทำการปรับปรุงไม่สามารถใช้งานได้ในช่วงเวลา 2:00 AM ถึง 5:00 AM ICT</div>
                    <div class="col-lg-6 text-right">© Benefit One (Thailand) Co,. Ltd - All Rights Reserved.</div>
                </div>
            </div>
        </section>
        <!-- END FOOTER -->



    </body>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/Popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
        <script src="js/custom.js"></script>
        <script>
            $(document).ready(function() {
                $("#slider").slider({
                    min: 0,
                    max: 100,
                    step: 1,
                    values: [10, 90],
                    slide: function(event, ui) {
                        for (var i = 0; i < ui.values.length; ++i) {
                            $("input.sliderValue[data-index=" + i + "]").val(ui.values[i]);
                        }
                    }
                });

                $("input.sliderValue").change(function() {
                    var $this = $(this);
                    $("#slider").slider("values", $this.data("index"), $this.val());
                });
            });
        </script>

        <script>
             $('.minus-btn').on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                var $input = $this.closest('div').find('input');
                var value = parseInt($input.val());

                if (value > 1) {
                    value = value - 1;
                } else {
                    value = 0;
                }

                $input.val(value);

                });

                $('.plus-btn').on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var $input = $this.closest('div').find('input');
                    var value = parseInt($input.val());

                    if (value < 100) {
                    value = value + 1;
                    } else {
                        value =100;
                    }

                    $input.val(value);
                });

            $('.owl-carousel-new-product').owlCarousel({
                loop:true,
                margin:10,
                dots: false,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                        nav:true
                    },
                    600:{
                        items:2,
                        nav:false
                    },
                    992:{
                        items:2,
                        nav:true,
                        loop:false
                    },
                    1200:{
                        items:4,
                        nav:true,
                        loop:false
                    }
                }
            })
        </script>

        <script type="text/javascript">

                jQuery('.search-wrapper .dropdown-toggle').on('click', function (e) {
                  $(this).next().toggle();
                });
                jQuery('.dropdown-menu.keep-open').on('click', function (e) {
                  e.stopPropagation();
                });

                if(1) {
                  $('body').attr('tabindex', '0');
                }
                else {
                  alertify.confirm().set({'reverseButtons': true});
                  alertify.prompt().set({'reverseButtons': true});
                }

                // dropdown 
                jQuery('.btn-1').on('click', function (e) {
                  $('.search-wrapper .dropdown-toggle').next().toggle();
                });

        </script>
        <script>
            $( ".tags" ).click(function(e) {                 
              $( this ).toggleClass( "active" ) && e.stopPropagation();
            });
        </script>

        <script>
            
                var fixmeTop = $('.search-wrapper').offset().top;      

                $(window).scroll(function() {                  

                    var currentScroll = $(window).scrollTop(); 

                    if (currentScroll >= fixmeTop) {     
                        $('.search-wrapper').addClass('fixed-serch s');      
                        $('.search-wrapper').css({                    
                            position: 'fixed',
                            top: '0',
                            left: '0',
                            width: '100%',
                            padding: '0 15px'
                        });
                    } else {   
                        $('.search-wrapper').removeClass('fixed-serch s');                                      
                        $('.search-wrapper').css({                     
                            position: 'static',
                            top: '0',
                            left: '0',
                            width: '100%',
                            padding: '0px'
                        });
                    }

                });
            
        </script>


        
</html>      