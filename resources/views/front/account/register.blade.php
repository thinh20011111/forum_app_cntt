<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('/')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Diễn đàn học tập khoa CNTT</title>
    <link rel="icon" href="front/img/logo_fita.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="front/css/main.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
    <link rel="stylesheet" href="front/css/color.css" type="text/css">
    <link rel="stylesheet" href="front/css/responsive.css" type="text/css">
</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="container-fluid pdng0">
            <div class="row merged">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="land-featurearea">
                        <div class="land-meta">
                            <h1>FITA VNUA</h1>
                            <p>
                                Diễn đàn học tập khoa công nghệ thông tin Học Viện Nông Nghiệp Việt Nam.
                            </p>
                            <span><img src="front/img/logo_fita.png" alt="" style="width: 300px;"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="log-reg-area bg">
                        <h2 class="log-title">Đăng ký</h2>

                        @if(session('notification'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('notification') }}
                        </div>
                        @endif

                        <form method="post" action="">
                            @csrf

                            <div class="form-group">
                                <input type="text" id="input" required="required" name="name" />
                                <label class="control-label" for="name">Tên</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" id="input" required="required" name="email" />
                                <label class="control-label" for="email">Email</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" required="required" name="password" />
                                <label class="control-label" for="password">Mật khẩu</label><i class="mtrl-select"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" required="required" name="password_confirmation" />
                                <label class="control-label" for="password_confirmation">Nhập lại mật khẩu</label><i class="mtrl-select"></i>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="./account/login" class="forgot-pwd">Bạn đã có tài khoản?</a>
                            </div>
                            <div class="submit-btns">
                                <button class="mtr-btn signin" type="submit"><span>Đăng ký</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="front/js/main.min.js"></script>
    <script src="front/js/script.js"></script>

</body>

</html>