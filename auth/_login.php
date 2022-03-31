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
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?= csrf_token() ?>">
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
    <title>Đăng nhập tài khoản</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASE_URL('') ?>assets/images/brand/favicon.ico" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?= BASE_URL('') ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?= BASE_URL('') ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/css/dark-style.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/css/transparent-style.css" rel="stylesheet">
    <link href="<?= BASE_URL('') ?>assets/css/skin-modes.css" rel="stylesheet" />

    <script src="<?=BASE_URL('')?>assets/js/clickMouseHeart.js"></script>

    <!--- FONT-ICONS CSS -->
    <link href="<?= BASE_URL('') ?>assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= BASE_URL('') ?>assets/css/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="<?= BASE_URL('') ?>assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/switcher/demo.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <div class="col-login mx-auto">
                    <div class="text-center">
                        <img src="<?= BASE_URL('') ?>assets/images/logo/logo-white.png" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100 row">
                    <div class="wrap-login100 p-6 col-lg-6">
                        <form class="login100-form validate-form" action="<?= BASE_URL('api/auth/login') ?>" method="POST" request-ajax="LBD" href="<?=BASE_URL('home')?>" call="request">
                            <span class="login100-form-title pb-5">
                                Đăng nhập tài khoản
                            </span>
                            <label class="login-social-icon"><span>Đăng nhập với email</span></label>
                            <div id="message"></div>
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="email" name="email" id="email" placeholder="Nhập email cua bạn">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" name="password" id="password" placeholder="Nhập mật khẩu">
                                            </div>
                                            <div class="text-end pt-4">
                                                <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p>
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button type="submit" id="btn_login" class="btn btn-primary btn-block"><i class="ti-un-lock"></i>Đăng nhập</button>
                                            </div>
                                            <div class="text-center pt-3">
                                                <p class="text-dark mb-0">Bạn chưa có tài khoản?<a href="<?= BASE_URL('auth/register') ?>" class="text-primary ms-1">Đăng kí</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!-- Perfect SCROLLBAR JS-->
    <script src="<?= BASE_URL('') ?>assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <!-- INPUT MASK JS -->
    <script src="<?= BASE_URL('') ?>assets/plugins/input-mask/jquery.mask.min.js"></script>
    <!-- GENERATE OTP JS -->
    <script src="<?= BASE_URL('') ?>assets/js/generate-otp.js"></script>
    <!-- Color Theme js -->
    <script src="<?= BASE_URL('') ?>assets/js/themeColors.js"></script>
    <!-- CUSTOM JS -->
    <script src="<?= BASE_URL('') ?>assets/js/custom.js"></script>
    <script src="<?= BASE_URL('') ?>assets/js/function.js?06092005"></script>
    <!-- Switcher js -->
    <script src="<?= BASE_URL('') ?>assets/switcher/js/switcher.js"></script>
</body>

</html>