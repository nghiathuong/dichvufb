<?php
require_once 'database/config.php';
require_once 'database/function.php';

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="description" content="MXHO.NET">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="description" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET" />
    <meta name="keywords" content="MXHO.NET like, sub, comment, share, facebook, tik tok, ig" />
    <meta property="og:description" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET" />
    <meta name="copyright" content="Lương Bình Dương" />
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
    <title>CHÀO MỪNG BẠN</title>
    <link rel="icon" href="<?=BASE_URL('')?>assets/images/brand/favicon.ico" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/bootstrap.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/animate.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/owl.carousel.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/owl.theme.default.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/meanmenu.min.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/magnific-popup.min.css" type="text/css" media="all" />

    <link rel='stylesheet' href='<?=BASE_URL('')?>startup/assets/css/boxicons.min.css' type="text/css" media="all" />

    <link rel='stylesheet' href='<?=BASE_URL('')?>startup/assets/css/flaticon.css' type="text/css" media="all" />

    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/nice-select.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/style.css" type="text/css" media="all" />

    <link rel="stylesheet" href="<?=BASE_URL('')?>startup/assets/css/responsive.css" type="text/css" media="all" />
</head>

<body>

    <div class="preloader bg-blue">
        <div class="preloader-wrapper">
            <div class="preloader-content">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="fixed-top">
        <div class="navbar-area sticky-black">
            <div class="mobile-nav">
                <a href="/" class="mobile-brand">
                    <h3 class="text-light"><?= $_SERVER['SERVER_NAME'] ?></h3>
                </a>
                <div class="navbar-option">
                    <div class="navbar-option-item navbar-option-dots dropdown">
                        <button type="button" id="dot" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                        </button>
                        <ul class="dropdown-menu navbar-dots-dropdown navbar-social" aria-labelledby="dot">
                            <li class="dropdown-item">
                                <div class="navbar-option-item navbar-option-search">
                                    <a href="#" class="search-option">
                                        <i class="flaticon-loupe"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="navbar-option-item navbar-option-cart">
                                    <a href="cart.html">
                                        <i class="flaticon-shopping-cart"></i>
                                        <span class="option-badge option-badge-main">2</span>
                                    </a>
                                </div>
                            </li>
                            <li class="dropdown-item">
                                <div class="navbar-option-item">
                                    <a href="authentication.html">
                                        <i class="flaticon-quote-1"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-option-item side-topbar-option">
                        <button type="button">
                            <i class='bx bxs-grid-alt'></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <h3 class="text-light"><?= $_SERVER['SERVER_NAME'] ?></h3>
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Về chung tôi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Nổi bật </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Sub like giá rẻ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Liên hệ hỗ trợ</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="https://fb.com/luongbinhduong.mOzil" class="nav-link">Facebook</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://zalo.me/0963725258" class="nav-link">Zalo</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-option">
                            <div class="navbar-option-item">
                                <a href="<?= BASE_URL('auth/login') ?>" class="btn main-btn">Get Started</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="header-bg header-bg-one position-relative">
        <div class="bottom-frame"></div>
        <div class="header-carousel owl-carousel owl-theme">
            <div class="item">
                <div class="container-fluid d-flex align-items-center justify-content-center">
                    <div class="header-content header-content-white">
                        <h1><?= $_SERVER['SERVER_NAME'] ?></h1>
                        <p>Trang web cung cấp cho bạn các tài khoản mạng xã hội uy tín và các tools chất lượng hãy đến với chúng tôi</p>
                        <div class="button-group">
                            <a href="<?= BASE_URL('auth/login') ?>" class="btn main-btn">Đăng Nhập</a>
                            <a href="<?= BASE_URL('auth/register') ?>" class="btn main-btn main-btn-border-2" id="video-popup">Đăng Kí</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid d-flex align-items-center justify-content-center">
                    <div class="header-content header-content-white">
                        <h1>Đến với chúng tôi</h1>
                        <p>Các bạn có thể được nhiều ưu đãi khác nhau của trang web chúng tôi sẽ hỗ trợ bạn một cách hợp lí có thể</p>
                        <div class="button-group">
                            <a href="<?= BASE_URL('auth/login') ?>" class="btn main-btn">Đăng Nhập</a>
                            <a href="<?= BASE_URL('auth/register') ?>" class="btn main-btn main-btn-border-2" id="video-popup">Đăng Kí</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="about-section pt-100">
        <div class="container-fluid custom-container-fluid">
            <div class="row align-items-center pb-70">
                <div class="col-lg-7 pb-30 order-2 order-lg-1">
                    <div class="about-content-item text-lg-end">
                        <img src="<?=BASE_URL('')?>startup/assets/images/homepage-one/about-image-1.png" alt="about">
                    </div>
                </div>
                <div class="col-lg-5 pb-30 order-1 order-lg-2">
                    <div class="max-530 me-auto">
                        <div class="about-content-item">
                            <div class="section-title section-title-left">
                                <h2>Chất Lượng Hệ Thống</h2>
                                <p>Các ưu điểm của chúng tôi.</p>
                            </div>
                            <div class="about-list">
                                <div class="about-list-item">
                                    <div class="about-list-icon-bg">
                                        <div class="about-list-icon-thumb">
                                            <img src="<?=BASE_URL('')?>startup/assets/images/computer-bug.svg" alt="computer">
                                        </div>
                                    </div>
                                    <div class="about-list-text">
                                        <h3>Bảo mật</h3>
                                        <p>Nỗi đau tự nó là niềm vui, nó đã dễ dàng đạt được hơn, nhưng nó được phát triển</p>
                                    </div>
                                </div>
                                <div class="about-list-item">
                                    <div class="about-list-icon-bg">
                                        <div class="about-list-icon-thumb">
                                            <img src="<?=BASE_URL('')?>startup/assets/images/shields.svg" alt="shields">
                                        </div>
                                    </div>
                                    <div class="about-list-text">
                                        <h3>Bảo vệ</h3>
                                        <p>Bảo vệ thông tin người dùng của những người truy cập trang web</p>
                                    </div>
                                </div>
                                <div class="about-list-item">
                                    <div class="about-list-icon-bg">
                                        <div class="about-list-icon-thumb">
                                            <img src="<?=BASE_URL('')?>startup/assets/images/fingerprint-scanner.svg" alt="fingerprint">
                                        </div>
                                    </div>
                                    <div class="about-list-text">
                                        <h3>Tự động</h3>
                                        <p>Hệ thống của chúng tôi tự động hoàn toàn chạy 24/24h</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section pt-100 pb-70">
        <div class="container justofy-content-center">
            <div class="section-title section-title-lg">
                <h2>Các cấp bậc của người dùng </h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3 pb-30 feature-card-item">
                    <div class="feature-card feature-card-2 feature-card-sm">
                        <div class="feature-card-thumb feature-thumb-frame-1">
                            <img src="<?=BASE_URL('')?>startup/assets/images/daily.png" alt="feature">
                        </div>
                        <div class="feature-card-content">
                            <h3>Cộng tác viên</h3>
                            <p>Có các ưu đãi cho các cộng tác viên </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pb-30 feature-card-item">
                    <div class="feature-card feature-card-2 feature-card-sm">
                        <div class="feature-card-thumb feature-thumb-frame-1">
                            <img src="<?=BASE_URL('')?>startup/assets/images/contacvien.jpg" alt="feature">
                        </div>
                        <div class="feature-card-content">
                            <h3>Đại lý</h3>
                            <p>Có các ưu đãi dành cho Đại lý </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pb-30 feature-card-item">
                    <div class="feature-card feature-card-2 feature-card-sm">
                        <div class="feature-card-thumb feature-thumb-frame-1">
                            <img src="<?=BASE_URL('')?>startup/assets/images/distribution.png" alt="feature">
                        </div>
                        <div class="feature-card-content">
                            <h3>Nhà phân phối</h3>
                            <p>Có các ưu đã dành cho Nhà Phân Phối</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer-lower bg-blue">
            <div class="container">
                <div class="footer-copyright-text footer-copyright-text-white">
                    <p>Copyright ©2022 <?=$_SERVER['SERVER_NAME']?></a></p>
                </div>
            </div>
        </div>
    </footer>


    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            Scroll Top <i class="bx bx-down-arrow-alt"></i>
        </div>
    </div>


    <div class="side-modal-wrapper">
        <div class="side-modal">
            <div class="side-modal-header">
                <div class="side-modal-logo">
                    <a href="index.html"><img src="<?=BASE_URL('')?>startup/assets/images/logo-dark.png" alt="logo"></a>
                </div>
                <div class="side-modal-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>
            <div class="side-modal-body">
                <div class="address-content">
                    <h3>Contact Us</h3>
                    <div class="address-list">
                        <div class="address-list-item">
                            <i class="flaticon-email"></i>
                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#c1a9a4adadae81a2b8a2aeefa2aeac"><span class="__cf_email__" data-cfemail="7d15181111123d1e041e12531e1210">[email&#160;protected]</span></a>
                        </div>
                        <div class="address-list-item">
                            <i class="flaticon-location"></i>
                            32/7, George Street, England, BA1 2FJ.
                        </div>
                        <div class="address-list-item">
                            <i class="flaticon-phone-call"></i>
                            <a href="tel:0044-665-66785">+44 665 66785</a>
                        </div>
                    </div>
                </div>
                <div class="address-content">
                    <h3>Follow Us</h3>
                    <ul class="social-list">
                        <li>
                            <a href="https://www.facebook.com/"><i class="flaticon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/"><i class="flaticon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/"><i class="flaticon-youtube"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/"><i class="flaticon-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="search-overlay">
        <div class="search-close">
            <i class="bx bx-x"></i>
        </div>
        <div class="search-form-area">
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Search..." class="form-control" autofocus="autofocus">
                </div>
            </form>
        </div>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?=BASE_URL('')?>startup/assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?=BASE_URL('')?>startup/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/jquery.magnific-popup.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?=BASE_URL('')?>startup/assets/js/jquery.counterup.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/owl.carousel.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/jquery.nice-select.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/isotope.pkgd.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/form-validator.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/contact-form-script.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/jquery.meanmenu.min.js"></script>

    <script src="<?=BASE_URL('')?>startup/assets/js/script.js"></script>
</body>
</html>