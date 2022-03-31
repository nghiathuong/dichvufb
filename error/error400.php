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
        <title>KHông tìm thấy trang </title>

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
            <div class="page-content error-page error2 text-white">
                <div class="container text-center">
                    <div class="error-template">
                        <h1 class="display-1 mb-2">4<span class="text-center custom-emoji"><svg xmlns="http://www.w3.org/2000/svg" height="140" width="140" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#c4bffd" d="M9,21.48047c-0.55214,0.00014-0.99986-0.44734-1-0.99948c0-0.00017,0-0.00035,0-0.00052V10c0-0.55229,0.44771-1,1-1s1,0.44771,1,1v10.48047c0.00014,0.55214-0.44734,0.99986-0.99948,1C9.00035,21.48047,9.00017,21.48047,9,21.48047z M15,21.48047c-0.55214,0.00014-0.99986-0.44734-1-0.99948c0-0.00017,0-0.00035,0-0.00052V10c0-0.55229,0.44771-1,1-1s1,0.44771,1,1v10.48047c0.00014,0.55214-0.44734,0.99986-0.99948,1C15.00035,21.48047,15.00017,21.48047,15,21.48047z"/><path fill="#a69ffd" d="M15.40137,21.39392C19.24707,20.00067,22,16.32666,22,12c0-5.52283-4.47717-10-10-10S2,6.47717,2,12c0,4.32678,2.75323,8.00085,6.59912,9.39404C8.24725,21.23926,8.00006,20.89001,8,20.48102c0-0.00018,0-0.00037,0-0.00055V10c0-0.55231,0.44769-1,1-1s1,0.44769,1,1v10.48047c0.00012,0.55212-0.44733,0.99988-0.99945,1c-0.00018,0-0.00037,0-0.00055,0c-0.13025,0-0.25305-0.02875-0.36719-0.07404C9.6864,21.78375,10.81665,22,12,22c1.18353,0,2.3139-0.21631,3.36761-0.59375c-0.11407,0.04535-0.23688,0.07422-0.36707,0.07422c-0.00018,0-0.00037,0-0.00055,0c-0.55212,0.00012-0.99988-0.44733-1-0.99945c0-0.00018,0-0.00037,0-0.00055V10c0-0.55231,0.44769-1,1-1s1,0.44769,1,1v10.48047C16.00006,20.88947,15.75311,21.23901,15.40137,21.39392z"/><rect width="4" height="2" x="10" y="14" fill="#6c5ffc"/><path fill="#6c5ffc" d="M16,11h-2c-0.55229,0-1-0.44771-1-1s0.44771-1,1-1h2c0.55228,0,1,0.44771,1,1S16.55228,11,16,11z M10,11H8c-0.55228,0-1-0.44771-1-1s0.44772-1,1-1h2c0.55229,0,1,0.44771,1,1S10.55229,11,10,11z"/></svg></span>0</h1>
                        <div class="m-5">
                            <span class="fs-20">
                                    OOPS! Page not found
                            </span>
                            <p>Sorry, an error has occured, Requested page not found!</p>
                        </div>
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


<!-- Mirrored from laravel8.spruko.com/sash/error400 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Feb 2022 17:07:09 GMT -->
</html>
