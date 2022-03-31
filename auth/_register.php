<?php
require_once '../database/function.php';
require_once '../database/config.php';

if (isset($_SESSION['email_user'])) {
    header('location: ../home');
}
?>
<!doctype html>
<html lang="vi" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?=csrf_token()?>">
    <meta name="description" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET" />
    <meta name="keywords" content="MXHO.NET like, sub, comment, share, facebook, tik tok, ig" />
    <meta property="og:description" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET" />
    <meta name="copyright" content="" />
    <meta name="robots" content="index, follow" />
    <meta name='revisit-after' content='1 days' />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:url" content="https://MXHO.NET" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:app_id" content="" />
    <meta name="twitter:title" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET">
    <meta name="twitter:description" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET">
    <!-- title -->
    <title>Đăng kí tài khoản</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASE_URL('') ?>assets/images/brand/favicon.ico" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?= BASE_URL('') ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?= BASE_URL('') ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/css/dark-style.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/css/transparent-style.css" rel="stylesheet">
    <link href="<?= BASE_URL('') ?>assets/css/skin-modes.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!--- FONT-ICONS CSS -->
    <link href="<?= BASE_URL('') ?>assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= BASE_URL('') ?>assets/css/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="<?= BASE_URL('') ?>assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/switcher/demo.css" rel="stylesheet" />
    <script src="<?=BASE_URL('')?>assets/js/clickMouseHeart.js"></script>
    <script src="<?= BASE_URL('') ?>assets/js/source.js"></script>
</head>

<body class="app sidebar-mini ltr">
    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">


        <!-- global-loader -->
        <div id="global-loader">
            <img src="<?= BASE_URL('') ?>assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- global-loader closed -->

        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- CONTAINER OPEN -->
                <div class="col-login mx-auto mt-3">
                    <div class="text-center">
                        <img src="<?= BASE_URL('') ?>assets/images/logo/logo-white.png" class="header-brand-img m-0" alt="">
                    </div>
                </div>
                <div class="container-login100 row">
                    <div class="wrap-login100 p-6 col-lg-6">
                        <form class="login100-form validate-form" action="<?=BASE_URL('api/auth/register')?>" href="<?=BASE_URL('auth/login')?>" method="POST" request-ajax="LBD" call="request">
                            <span class="login100-form-title">
                                Đăng kí
                            <label class="login-social-icon"><span>Đăng kí tài khoản của bạn</span></label>
                            <div id="message"></div>
                            </span>
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                </a>
                                <input class="input100 form-control" type="text" name="name" id="name" placeholder="Họ và tên của bạn">
                            </div>
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </a>
                                <input class="input100 form-control" type="email" name="email" id="email" placeholder="Nhập email của bạn">
                            </div>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                </a>
                                <input class="input100 form-control" type="password" name="password" id="password" placeholder="Nhập mật khẩu của bạn">
                            </div>
                            <label class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" checked>
                                <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
                            </label>
                            <div class="container-login100-form-btn">
                               <button class="login100-form-btn btn-primary" call="call" type="submit"> <i class="ti-lock"></i> Đăng kí</button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Bạn đã có tài khoản?<a href="<?=BASE_URL('auth/login')?>" class="text-primary ms-1">Đăng nhập</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="<?= BASE_URL('') ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="<?= BASE_URL('') ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="<?= BASE_URL('') ?>assets/plugins/show-password/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="<?= BASE_URL('') ?>assets/js/generate-otp.js"></script>

    <!-- INPUT MASK JS -->
    <script src="<?= BASE_URL('') ?>assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- Color Theme js -->
    <script src="<?= BASE_URL('') ?>assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="<?= BASE_URL('') ?>assets/js/custom.js"></script>
    <script src="<?=BASE_URL('')?>assets/js/function.js?06092005"></script>
    <!-- Switcher js -->
    <script src="<?= BASE_URL('') ?>assets/switcher/js/switcher.js"></script>
</body>
</html>