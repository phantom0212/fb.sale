<!-- develop by ngocbich85hd  day 30-11--2106 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML-BASE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/styleMain.css" rel="stylesheet">
    <!--<link href="dist/css/custom.css" rel="stylesheet">-->
    <link href="dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!--Header-->
<div id="header" class="header">
    <nav class="navbar navbar-default menutop col-lg-12  navbar-fixed-top">
        <div class="col-lg-2 headerLeft">
            <a href="#" class="menuBar" id="menuBtn"> <i class="fa fa-bars" aria-hidden="true"></i></a>
            <a href="#" class="iconMenu"><img src="dist/image/logo-Tintuc.video.png"></a>
        </div>

        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default btsearch"><i class="fa fa-search"
                                                                              aria-hidden="true"></i></button>
                </form>
                <ul class="nav navbar-nav navbar-right menuRight">
                    <li><a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i> Đăng video</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký </a>

                    </li>
                    <li class="dropdown">
                        <a id="open_popup" name="open_popup" rel="webPopup" href="#popup_content1">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập
                        </a>
                    </li>

                </ul>
                <div id="popup_content1" class="popup">
                    <div class="boxLogin">
                        <a class="close_popup close_popup_link" href="javascript:void(0)">Close</a>
                        <header class="txtC txtB">
                            <div class="clip"></div>
                            <div class="clipLine"></div>

                        </header>
                        <div class="col-lg-7 info-PM">
                            <a href="#" class="logo dpib ovh" tabindex="-1">
                                <img src="dist/skin/logo-snl.jpg" alt="SneankerLand" title="SneankerLand">
                            </a>
                            <h1>Chuyên cung cấp các loại giầy cao cấp</h1>
                            <p>Hàng ngàn mẫu giày da nam cao cấp với đầy đủ kiểu dáng đã có mặt tại
                                SneankerLand. Liên hệ ngay với chúng tôi theo hotline <b>09.74.74.5553</b> để
                                được hỗ trợ tư vấn và lựa chọn tốt nhất.</p>
                            <!--<img src="develop/img/desk.png">-->
                        </div>
                        <form action="/Login" method="post" class="col-lg-5">
                            <section class="loginFr ovh vi-VN">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                                              role="tab"
                                                                              data-toggle="tab">Đăng Nhập</a>
                                    </li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile"
                                                               role="tab" data-toggle="tab">Đăng
                                            Ký</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content import-Info">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="w100pt input-group">
                                                    <div class="label">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="email" class="form-control"
                                                           placeholder="Email: ngocbich85hd@gmail.com">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="w100pt input-group">
                                                    <div class="label">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="email" class="form-control"
                                                           placeholder="* * * * *">
                                                </div>
                                            </div>

                                            <div class="checkbox left w100pt">
                                                <input id="checkbox1" class="styled" type="checkbox" checked="">
                                                <label for="checkbox1">Ghi nhớ mật khẩu</label>

                                            </div>

                                            <div class="form-group boxBt">
                                                <button type="submit" class="btn bt-login bg-green clfff">Đăng
                                                    nhập <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                </button>
                                                <a href="#" class="left cl-green bt-foget">Quên mật khẩu ?</a>
                                                <a href="#" class="right cl-green bt-resgiter">Đăng ký tại đây
                                                    !</a>

                                                <div class="left w100pt logigFacebook">
                                                    <h3>Hoặc đăng nhập bằng tài khoản sau:</h3>
                                                    <button type="submit" class="btn bt-login-face">
                                                        <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                                        Đăng nhập Facebook
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="w100pt input-group">
                                                    <div class="label">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="Tên đăng nhập"> <span> *</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="w100pt input-group">
                                                    <div class="label">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="Nhập mật khẩu"><span> *</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="w100pt input-group">
                                                    <div class="label">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="Nhập lại mật khẩu"><span> *</span>
                                                </div>
                                            </div>

                                            <!--<div class="form-group">-->
                                            <!--<div class="w100pt input-group">-->
                                            <!--<div class="label">-->
                                            <!--<i class="fa fa-calendar" aria-hidden="true"></i>-->
                                            <!--</div>-->
                                            <!--<input type="text" class="form-control"-->
                                            <!--placeholder="Ngày sinh"><span> *</span>-->

                                            <!--</div>-->
                                            <!--</div>-->
                                            <!--<div class="form-group">-->
                                            <!--<div class="checkbox checkbox-circle col-sm-5">-->
                                            <!--<input id="checkbox2" type="checkbox" checked="">-->
                                            <!--<label for="checkbox2">-->
                                            <!--Nam-->
                                            <!--</label>-->
                                            <!--</div>-->
                                            <!--<div class="checkbox checkbox-circle col-sm-5">-->
                                            <!--<input id="checkbox3" type="checkbox">-->
                                            <!--<label for="checkbox3">-->
                                            <!--Nữ-->
                                            <!--</label>-->
                                            <!--</div>-->
                                            <!--</div>-->

                                            <div class="form-group">
                                                <div class="w100pt input-group">
                                                    <div class="label">
                                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="Điện thoại của bạn "><span> *</span>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="w100pt input-group">
                                                    <div class="label">
                                                        <i class="fa fa-map-o" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                           placeholder="Địa chỉ của bạn "><span> *</span>

                                                </div>
                                            </div>


                                            <div class="form-group boxBt">
                                                <button type="submit" class="btn bt-login bg-green clfff">Đăng
                                                    ký
                                                </button>


                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>


                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</div>

<!--container-->



<!-- begin jQuery -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="dist/js/jquery-3.0.0.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>

<!--menu-Vertical-->
<script src="./dist/menu-Vertical/jquery.min.js"></script>
<script src="./dist/menu-Vertical/VerticalNavigation.min.js"></script>
<script src="./dist/menu-Vertical/app.js"></script>

<!--menu-left-->
<script type="text/javascript" src="./dist/menu-left/js/jquery-swipe-nav-plugin.js"></script>
<!--list-slide-->
<script src="./dist/product-slide1/js/jquery.bxslider.min.js" type="text/javascript" charset="utf-8"></script>
<!--popup-->
<script src="dist/js/jquery.popup.min.js"></script>
<script src="dist/js/main.min.js"></script>
</body>
</html>