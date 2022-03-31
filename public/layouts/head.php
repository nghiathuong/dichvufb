<!doctype html>
<html lang="vi" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!-- META DATA -->
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
    <meta property="og:image" content="<?=BASE_URL('')?>images/logo/logo-2.png">
    <meta property="og:title" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:app_id" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET" />
    <meta name="twitter:title" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET">
    <meta name="twitter:description" content="MXHO.NET | Hệ thống dịch vụ MXH giá rẻ | MXHO.NET">
    <!-- title -->
    <title><?= $title ?> | <?= $_SERVER["SERVER_NAME"] ?> </title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= BASE_URL('') ?>assets/images/brand/favicon.ico" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?= BASE_URL('') ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?= BASE_URL('') ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/css/dark-style.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/css/transparent-style.css" rel="stylesheet">
    <link href="<?= BASE_URL('') ?>assets/css/skin-modes.css" rel="stylesheet" />
    <!--- FONT-ICONS CSS -->
    <link href="<?= BASE_URL('') ?>assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= BASE_URL('') ?>assets/css/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="<?= BASE_URL('') ?>assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="<?= BASE_URL('') ?>assets/switcher/demo.css" rel="stylesheet" />
    <script src="<?= BASE_URL('') ?>assets/js/clickMouseHeart.js"></script>
    <script src="<?= BASE_URL('') ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL('') ?>assets/js/source.js"></script>
    <!-- SWEET-ALERT JS -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="app sidebar-mini ltr">

    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Click Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Hover Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>LTR and RTL VERSIONS</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">LTR Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-color-picker color-primary-light" value="#6c5ffc" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Dark Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-dark-color-picker color-primary-dark" value="#6c5ffc" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Background</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-transparent-color-picker color-bg-transparent" value="#6c5ffc" id="transparentBgColorID" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Bg-Image Style</h4>
                            <div class="skin-body switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Bg-Image Primary</span>
                                    <div class="">
                                        <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#7e44d5" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <a class="bg-img1 bg-img" href="javascript:void(0);"><img src="<?= BASE_URL('') ?>assets/images/media/bg-img1.jpg" alt="Bg-Image" id="bgimage1"></a>
                                    <a class="bg-img2 bg-img" href="javascript:void(0);"><img src="<?= BASE_URL('') ?>assets/images/media/bg-img2.jpg" alt="Bg-Image" id="bgimage2"></a>
                                    <a class="bg-img3 bg-img" href="javascript:void(0);"><img src="<?= BASE_URL('') ?>assets/images/media/bg-img3.jpg" alt="Bg-Image" id="bgimage3"></a>
                                    <a class="bg-img4 bg-img" href="javascript:void(0);"><img src="<?= BASE_URL('') ?>assets/images/media/bg-img4.jpg" alt="Bg-Image" id="bgimage4"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Leftmenu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightMenu d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle gradientMenu d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch19" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightHeader d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>

                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch20" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Sidemenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch16" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch17" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu Style 1</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch18" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-block resetCustomStyles" type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <!-- global-loader -->
    <div id="global-loader">
        <img src="<?= BASE_URL('') ?>assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->

    <!-- page -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="<?= BASE_URL('home') ?>">
                            <img src="<?= BASE_URL('') ?>assets/images/logo/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="<?= BASE_URL('') ?>assets/images/logo/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input class="form-control" placeholder="Search for results..." type="search">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SEARCH -->
                                        <div class="dropdown  d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <!-- FULL-SCREEN -->
                                        <div class="dropdown  d-flex notifications">
                                            <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications</h6>
                                                    </div>
                                                </div>
                                                <div class="notifications-menu">
                                                    <a class="dropdown-item d-flex" href="#">
                                                        <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                            <i class="fe fe-check-circle"></i>
                                                        </div>
                                                        <div class="mt-1">
                                                            <h5 class="notification-label mb-1">Chúc các bạn 1 ngày vui vẻ</h5>
                                                            <span class="notification-subtext">2 hours ago</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="#" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
                                            </div>
                                        </div>
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="https://i.ibb.co/vd2T9Ry/logo-2-d.png" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold"><?= $my_name ?></h5>
                                                        <small class="text-muted">(<?= $lever_user ?>)</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="<?= BASE_URL('user/profile') ?>">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="<?= BASE_URL('out') ?>">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo-icon nav-link icon">
                                <i class="fe fe-settings fa-spin  text_primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="<?= BASE_URL('home') ?>">
                            <img src="<?= BASE_URL('') ?>assets/images/logo/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="<?= BASE_URL('') ?>assets/images/logo/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="<?= BASE_URL('') ?>assets/images/logo/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="<?= BASE_URL('') ?>assets/images/logo/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="sub-category">
                                <h3>Main</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="<?= BASE_URL('home') ?>"> <img src="<?= BASE_URL('') ?>assets/images/svgs/home.svg" class="side-menu__icon w-15" alt=""> <span class="side-menu__label">Trang chủ</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="<?= BASE_URL('user/profile') ?>"> <img src="<?= BASE_URL('') ?>assets/images/client/profile.png" class="side-menu__icon w-15" alt=""><span class="side-menu__label">Tài Khoản</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><img src="<?= BASE_URL('') ?>assets/images/client/credit.png" class="side-menu__icon w-15" alt=""><span class="side-menu__label">Nạp tiền</span><span class="badge bg-success side-success">2</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Banking</a></li>
                                    <li><a href="<?= BASE_URL('recharge/banking') ?>" class="slide-item"> Nạp ngân hàng</a></li>
                                    <li><a href="<?= BASE_URL('recharge/bank-card') ?>" class="slide-item"> Nạp thẻ cào <span class="badge bg-pink side-success">Bảo trì</span> </a></li>
                                    <li><a href="<?= BASE_URL('user/history/bank') ?>" class="slide-item"> Lịch sử nạp</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="<?= BASE_URL('user/statistical') ?>"> <img src="<?= BASE_URL('') ?>assets/images/client/bar-chart.png" class="side-menu__icon w-15" alt=""><span class="side-menu__label">Thống kê dòng tiền</span></a>
                            </li>
                            <li class="sub-category">
                                <h3>Loại dịch vụ</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="<?= BASE_URL('public/dich-vu-spam') ?>"> <img src="<?= BASE_URL('') ?>assets/images/svgs/home.svg" class="side-menu__icon w-15" alt=""> <span class="side-menu__label">Dịch vụ spam</span></a>
                            </li>
                            
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"> <img src="<?= BASE_URL('') ?>assets/images/client/facebook.png" class="side-menu__icon w-15" alt=""><span class="side-menu__label">Dịch vụ facebook</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                    <li><a href="<?= BASE_URL('service/facebook/like-post-sale') ?>" class="slide-item"> Like post (sale)</a></li>
                                    <li><a href="<?= BASE_URL('service/facebook/like-post-speed') ?>" class="slide-item"> Like post (speed)</a></li>
                                    <li><a href="<?= BASE_URL('service/facebook/cmt-sale') ?>" class="slide-item"> Tăng bình luận (sale)</a></li>
                                    <li><a href="<?= BASE_URL('service/facebook/sub-vip') ?>" class="slide-item"> Tăng sub/follow (vip)</a></li>
                                    <li><a href="<?= BASE_URL('service/facebook/sub-quality') ?>" class="slide-item"> Tăng sub/follow (quality)</a></li>
                                    <li><a href="<?= BASE_URL('service/facebook/sub-sale') ?>" class="slide-item"> Tăng sub/follow (sale)</a></li>
                                    <li><a href="<?= BASE_URL('service/facebook/sub-speed') ?>" class="slide-item"> Tăng sub/follow (speed)</a></li>
                                    <li><a href="<?= BASE_URL('service/facebook/like-page-sale') ?>" class="slide-item"> Tăng sub/follow page (sale)</a></li>
                                </ul>
                            </li>
                            <?php if ($getUser['level'] == 4) { ?>
                                <li class="sub-category">
                                    <h3>Phần ADMIN</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Quản lí website</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Quản lí web</a></li>
                                        <li><a href="<?= BASE_URL('_admin/users/quanly') ?>" class="slide-item"> Quản lí người dùng</a></li>
                                        <li><a href="<?= BASE_URL('_admin/thongbao') ?>" class="slide-item"> Quản lí thông báo</a></li>
                                        <li class="sub-slide">
                                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span class="sub-side-menu__label">Quản lý đơn hàng</span><i class="sub-angle fe fe-chevron-right"></i></a>
                                            <ul class="sub-slide-menu">
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/like-post-sale') ?>">Like post (sale)</a></li>
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/like-post-speed') ?>">Like post (speed)</a></li>
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/cmt-sale') ?>">Cmt (sale)</a></li>
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/sub-vip') ?>">Sub/follow (vip)</a></li>
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/sub-quality') ?>">Sub/follow (quality)</a></li>
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/sub-sale') ?>">Sub/follow (sale)</a></li>
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/sub-speed') ?>">Sub/follow (speed)</a></li>
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/sub-page-vip') ?>">Sub/follow page (vip)</a></li>
                                                <li><a class="sub-slide-item" href="<?= BASE_URL('_admin/users/order/sub-page-sale') ?>">Sub/follow (sale)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= BASE_URL('_admin/recharge/banking') ?>" class="slide-item"> Quản lí ngân hàng</a></li>
                                        <li><a href="<?= BASE_URL('_admin/recharge/banking/history') ?>" class="slide-item"> Lịch sử nạp người dùng</a></li>
                                        <li><a href="wishlist.html" class="slide-item"> Wishlist</a></li>
                                        <li><a href="checkout.html" class="slide-item"> Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Quản lí dịch vụ</span><span class="badge bg-pink side-badge">1</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                                        <li><a href="<?= BASE_URL('_admin/service/facebook') ?>" class="slide-item"> Dịch vụ facebook</a></li>
                                    </ul><ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                                        <li><a href="<?= BASE_URL('_admin/service/orther/dich-vu-spam') ?>" class="slide-item"> Dịch vụ spam</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>