<?php
require_once 'database/config.php';
require_once 'database/function.php';

if (!isset($_SESSION['email_user'])) {
    header('location: auth/login');
}

$title = "Home";
include 'public/layouts/head.php';
?>
<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Trang chủ</h1>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body h8">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h2 class="mb-0">Số dư</h2>
                                            <h1 class="mb-0 number-font pt-4"><?= format_money($my_money) ?> VNĐ</h1>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <div class="h-8 w-8 chart-dropshadow"><img src="<?= BASE_URL('assets/images/client/money-bag.png') ?>" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body h8">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h2 class="mb-0">Đã nạp</h2>
                                            <h1 class="mb-0 number-font pt-4"><?= format_money($getUser['tongnap']) ?> VNĐ</h1>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <div class="h-8 w-8 chart-dropshadow"><img src="<?= BASE_URL('assets/images/client/bank.png') ?>" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body h8">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h2 class="mb-0">Cấp độ</h2>
                                            <h1 class="mb-0 number-font pt-4"><?= $lever_user ?></h1>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <div class="h-8 w-8 chart-dropshadow"><img src="<?= BASE_URL('assets/images/client/cap-do.png') ?>" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 END -->

            <!-- ROW-2 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                    <div class="card">
                        <div class="main-content-app pt-0">
                            <div class="main-content-body main-content-body-chat h-100">
                                <div class="main-chat-header pt-3 d-block d-sm-flex">
                                    <div class="main-img-user online"><img alt="avatar" src="<?= BASE_URL('assets/images/client/notification.png') ?>"></div>
                                    <div class="main-chat-msg-name mt-2">
                                        <h6>Thông báo hệ thống</h6>
                                        <span class="dot-label bg-success"></span><small class="me-3">online</small>
                                    </div>
                                </div>
                                <!-- main-chat-header -->
                                <div class="main-chat-body flex-2" id="ChatBody">
                                    <div class="content-inner">
                                        <?php 
                                            foreach($thongbao as $thongbao){
                                        ?>
                                        <label class="main-chat-time"><span><?=$thongbao['date']?></span></label>
                                        <div class="media chat-left">
                                            <div class="main-img-user online"><img alt="avatar" src="assets/images/users/1.jpg"></div>
                                            <div class="media-body">
                                                <div class="main-msg-wrapper">
                                                    <?=$thongbao['noidung']?>
                                                </div>
                                                <div>
                                                    <span><?=$thongbao['date']?></span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="card shadow">
                        <div class="card-body justify-content-center">
                            <div class="card-title text-center">
                                <h4 class="number-font">Nâng cấp tài khoản</h4>
                            </div>
                            <div class="mt-5">
                                <div class="card-title text-center">
                                    <img src="<?= BASE_URL("assets/images/client/piggybank.png") ?>" class="w-50" alt="">
                                </div>
                                <div class="card-text text-center">
                                    <p>Nâng cấp tài khoản để có thể sử dụng đầy đủ tính năng của hệ thống</p>
                                </div>
                                <div class="card-text text-center">
                                    <a href="#" class="btn btn-primary btn-block">Nâng cấp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-2 END -->
        </div>
        <!-- container-closed -->
    </div>
</div>

<div class="modal fade" id="modal_thongbao">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Thông báo hệ thống</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p><?=$modal_thongbao['note']?></p>
            </div>
            <div class="modal-footer"> 
                <button class="btn btn-primary" data-bs-dismiss="modal">Tôi đã đọc</button>
            </div>
        </div>
    </div>
</div>
<?php
include 'public/layouts/foot.php';
?>
