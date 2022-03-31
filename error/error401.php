<?php 
    require_once '../database/config.php';
    require_once '../database/function.php';
?>
<!doctype html>
<html lang="vi" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- title -->
        <title>đã xảy ra lỗi/title>

        <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=BASE_URL('')?>assets/images/brand/favicon.ico" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?=BASE_URL('')?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?=BASE_URL('')?>assets/css/style.css" rel="stylesheet" />
    <link href="<?=BASE_URL('')?>assets/css/dark-style.css" rel="stylesheet" />
    <link href="<?=BASE_URL('')?>assets/css/transparent-style.css" rel="stylesheet">
    <link href="<?=BASE_URL('')?>assets/css/skin-modes.css" rel="stylesheet" />

    


    
    <!--- FONT-ICONS CSS -->
    <link href="<?=BASE_URL('')?>assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?=BASE_URL('')?>assets/css/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="<?=BASE_URL('')?>assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="<?=BASE_URL('')?>assets/switcher/demo.css" rel="stylesheet" />

    </head>

    <body class="app sidebar-mini ltr">

        <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="p-3 d-grid gap-2">
                                <a href="https://laravel8.spruko.com/sash" class="btn ripple btn-primary mt-0">View Demo</a>
                                <a href="https://themeforest.net/item/sash-bootstrap-5-admin-dashboard-template/35183671" class="btn ripple btn-secondary">Buy Now</a>
                                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our Portfolio</a>
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
                                            <input class="w-30p h-30 input-dark-color-picker color-primary-dark" value="#6c5ffc" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor"
                                                name="darkPrimary">
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
                                            <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
                                                data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
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
                                        <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#7e44d5" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <a class="bg-img1 bg-img" href="javascript:void(0);"><img src="<?=BASE_URL('')?>assets/images/media/bg-img1.jpg"  alt="Bg-Image" id="bgimage1"></a>
                                    <a class="bg-img2 bg-img" href="javascript:void(0);"><img src="<?=BASE_URL('')?>assets/images/media/bg-img2.jpg"  alt="Bg-Image"  id="bgimage2"></a>
                                    <a class="bg-img3 bg-img" href="javascript:void(0);"><img src="<?=BASE_URL('')?>assets/images/media/bg-img3.jpg"  alt="Bg-Image" id="bgimage3"></a>
                                    <a class="bg-img4 bg-img" href="javascript:void(0);"><img src="<?=BASE_URL('')?>assets/images/media/bg-img4.jpg"  alt="Bg-Image" id="bgimage4"></a>
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


        
    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

    
            <!-- global-loader -->
            <div id="global-loader">
                <img src="<?=BASE_URL('')?>assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>
            <!-- global-loader closed -->

                <!-- PAGE -->
                <div class="page">
                    <div class="">
                        <div class="dropdown float-end custom-layout">
                            <div class="demo-icon nav-link icon mt-4">
                                <i class="fe fe-settings fa-spin text_primary"></i>
                            </div>
                        </div>
                        <!-- Theme-Layout -->

                        
            <!-- PAGE-CONTENT OPEN -->
            <div class="page-content error-page error2  text-white">
                <div class="container text-center">
                    <div class="error-template">
                        <h1 class="display-1 mb-2">4<span class="custom-emoji"><svg xmlns="http://www.w3.org/2000/svg" height="140" width="140" data-name="Layer 1" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="#a2a1ff"/><path fill="#6563ff" d="M14.99951,17.0918a.99473.99473,0,0,1-.64209-.23438,3.766,3.766,0,0,0-4.71484,0,.99955.99955,0,1,1-1.28516-1.53125,5.81162,5.81162,0,0,1,7.28516,0,.99974.99974,0,0,1-.64307,1.76563Z"/><circle cx="15" cy="10" r="1" fill="#6563ff"/><circle cx="9" cy="10" r="1" fill="#6563ff"/></svg></span>1</h1>
                        <h5 class="error-details">
                            Sorry, an error has occured, Requested page not found!
                        </h5>
                        <div class="text-center">
                            <a class="btn btn-secondary mt-5 mb-5" href="index.html"> <i class="fa fa-long-arrow-left"></i> Back to Home </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE-CONTENT OPEN CLOSED -->

        
                    </div>
                </div>
                <!-- End PAGE -->

        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->

        <!-- JQUERY JS -->
    <script src="<?=BASE_URL('')?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="<?=BASE_URL('')?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?=BASE_URL('')?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="<?=BASE_URL('')?>assets/plugins/show-password/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="<?=BASE_URL('')?>assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="<?=BASE_URL('')?>assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- INPUT MASK JS -->
    <script src="<?=BASE_URL('')?>assets/plugins/input-mask/jquery.mask.min.js"></script>

    


    
    <!-- Color Theme js -->
    <script src="<?=BASE_URL('')?>assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="<?=BASE_URL('')?>assets/js/custom.js"></script>

    <!-- Switcher js -->
    <script src="<?=BASE_URL('')?>assets/switcher/js/switcher.js"></script>

    </body>
</html>
