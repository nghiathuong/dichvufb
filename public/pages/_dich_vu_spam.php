<?php
require_once '../../database/config.php';
require_once '../../database/function.php';
if (!isset($_SESSION['email_user'])) {
    header("location: $welecome");
}
$title = "Dịch vụ spam";
include_once '../layouts/head.php';

?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <div class="page-header">
                <h1 class="page-title">Dịch vụ spam</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Public</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dịch vụ spam</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
                    <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Dịch vụ spam</h3>
                            <div class="card-title text-white justify-content-end mx-auto">
                                <a href="<?= BASE_URL('service/orther/spam-cmt-phone/order') ?>" class="btn btn-success">Lịch sử mua</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?=BASE_URL('public/dich-vu-spam/order')?>" method="POST"
                            request-ajax="LBD" call="swal" href="dich-vu-spam">
                                <div class="form-group">
                                    <label for="" class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control py-3" placeholder="Nhập số điện thoại" name="phone_number" id="phone_number">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Máy chủ</label>
                                    <?php
                                    $server = $DUONGSHADO->get_list("SELECT * FROM service_server WHERE email = '$my_email' AND code_server = 'spam_cmt_phone' AND status_server = 'active' AND key_server = 'orther_service' ");
                                    foreach ($server as $server) {
                                    ?>
                                        <div class="form-check">
                                            <div class="custom-switch form-switch me-2 pl-4">
                                                <input type="radio" name="server" class="form-check-input" id="server" onchange="bill()" value="<?= $server['server_service'] ?>" rate="<?= $server['rate'] ?>" checked>
                                                <?= $server['server_service'] ?> (<?= $server['title_server'] ?>)
                                                <span class="badge badge-success bg-success"><?= $server['rate'] ?>/tin nhắn</span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="alert alert-danger bg-danger text-white">
                                    <h3>Thông tin máy chủ</h3>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Bình luận</label>
                                    <textarea name="cmt_post" id="cmt_post" cols="15" rows="3" class="form-control" placeholder="Nhập nội dung cần bình luận"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Số lượng</label>
                                    <input type="number" name="soluong" id="soluong" class="form-control" onkeyup="bill()" value="50">
                                </div>
                                <div class="form-group">
                                    <div class="alert alert-primary bg-primary text-center text-white">
                                        <p>Tổng tiền = (Số lượng) x (Giá 1 comment)</p>
                                    </div>
                                </div>
                                <div class="alert alert-success bg-success text-center text-white">
                                    Tổng số tiền: <span class="text-primary" id="payment">0</span> Coin
                                </div>
                                <div class="form-group">
                                    <button type="submit" confirm="Bạn có chắc chắn mua đơn hàng này" class="btn btn-primary btn-block py-3" id="btn_payment">Thanh toán</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Thông tin tài khoản</div>
                        </div>
                        <div class="card-body py-2">
                            <div class="card-title text-center">
                                <h3><?= $my_name ?></h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless text-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="text-start">Số tiền</td>
                                            <td class="text-end"><span class="fw-bold  ms-auto"><?= format_money($my_money) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Tổng nạp</td>
                                            <td class="text-end"><span class="fw-bold text-success"><?= $getUser['tongnap'] ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Đã mua</td>
                                            <td class="text-end"><span class="fw-bold text-green"><?= $getUser['da_mua'] ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-1 CLOSED -->


    </div>
    <!-- container-closed -->
</div>
</div>
<script>
    function bill() {
        let amount = $('input[id=server]:checked').attr('rate');
        let payment = $('#soluong').val();
        let total = Math.round(payment * amount);
        $('#payment').html(Intl.NumberFormat().format(total));
    }
    $(document).ready(function() {
        bill();
    });
</script>
<?php
include_once '../layouts/foot.php';
?>