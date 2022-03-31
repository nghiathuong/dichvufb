<?php
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if (!isset($_SESSION['email_user'])) {
    header("location: $welecome");
}
$title = "Tăng sub/follow";
include_once '../../layouts/head.php';

?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <div class="page-header">
                <h1 class="page-title">Sub/Follow Vip</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Facebook</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sub/Follow Vip</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
                    <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Tăng Sub/Follow Vip</h3>
                            <div class="card-title text-white justify-content-end mx-auto">
                                <a href="<?= BASE_URL('service/facebook/sub-vip/order') ?>" class="btn btn-success">Lịch sử mua</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?=BASE_URL('service/api/facebook/sub-vip')?>" method="POST"
                            request-ajax="LBD" call="swal" href="sub-vip">
                                <div class="form-group row">
                                    <label for="" class="form-label">ID Facebook</label>
                                    <input type="number" class="form-control py-3 col-md-12" placeholder="Nhập ID trang cá nhân của bạn" name="id_sub" id="id_sub">
                                    <a class="modal-effect btn btn-secondary-light mt-3 col-md-4" data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#getUid">Get uid Facebook</a>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Máy chủ</label>
                                    <?php
                                    $server = $DUONGSHADO->get_list("SELECT * FROM service_server WHERE code_server ='sub_vip' AND status_server = 'active' AND key_server = 'facebook_service'  ");
                                    foreach ($server as $server) {
                                    ?>
                                        <div class="form-check">
                                            <div class="custom-switch form-switch me-2 pl-4">
                                                <input type="radio" name="server" class="form-check-input" id="server" onchange="bill()" value="<?= $server['server_service'] ?>" rate="<?= $server['rate'] ?>" checked>
                                                <?= $server['server_service'] ?> (<?= $server['title_server'] ?>)
                                                <span class="badge badge-success bg-success"><?= $server['rate'] ?>/sub</span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="alert alert-danger bg-danger text-white">
                                    <h3>Thông tin máy chủ</h3>
                                    - Mua bằng ID Facebook đã mở chế độ công khai, có nút theo dõi.<br />
                                    - Sv1 tốc độ cực nhanh, lên dư sub (đơn lên sau 5s -> 24h, dành cho đơn to) max
                                    10m, không bảo,
                                    hành, không chạy cho pro5, (đến đơn 100k chỉ trong 10p xong), thường thì đơn sẽ lên
                                    ngay vào khung giờ 8h30 sáng -> 24h, ae cần đẩy đơn ib admin hỗ trợ nhé. <br />
                                    - Sau khi mua sub sẽ lên sau 5s -> 24h. <br />
                                    - Nên buff dư cho khách tránh tụt nhé!.
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Số lượng</label>
                                    <input type="number" name="soluong" id="soluong" class="form-control" onkeyup="bill()" value="100">
                                </div>
                                <div class="form-group">
                                    <div class="alert alert-primary bg-primary text-center text-white">
                                        <p>Tổng tiền = (Số lượng) x (Giá 1 sub)</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Ghi chú</label>
                                    <textarea name="ghichu" id="ghichu" cols="15" rows="3" class="form-control" placeholder="Nhập nội dung"></textarea>
                                </div>
                                <div class="alert alert-success bg-success text-center text-white">
                                    Tổng số tiền: <span class="text-primary" id="payment">0</span> Coin
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block py-3" id="btn_payment"> <img src="<?= BASE_URL('assets/images/bank/payment.png') ?>" class="w-6" alt=""> Thanh toán</button>
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

<!-- MODAL EFFECTS -->
<div class="modal fade" id="getUid">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Lấu id facebook</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="" class="form-label">Nhập link fb của bạn</label>
                    <input type="text" class="form-control" placeholder="Nhập link fb của bạn" id="link_fb">
                </div>
                <div class="mt-2" id="msg"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn_get">Get Uid</button> <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
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
<script>
    $(document).ready(function() {
        $('#btn_get').on('click', function(e) {
            e.preventDefault();
            var link_fb = $('#link_fb').val();
            $('#btn_get').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').attr('disabled', 'disabled');
            $.ajax({
                url: "<?= BASE_URL('tool/facebook/getUid') ?>",
                type: 'POST',
                data: {
                    link_fb: link_fb
                },
                dataType: 'json',
                success: function(data) {
                    if (data.status == 200) {
                        $('#msg').html('<div class="alert alert-success">' + data.message + '</div>');
                        $('#id_sub').val(data.message);
                        $('#btn_get').html('Get Uid').removeAttr('disabled');
                    } else {
                        $('#msg').html('<div class="alert alert-danger">' + data.message + '</div>');
                        $('#btn_get').html('Get Uid').removeAttr('disabled');
                    }
                }
            });
        });
    });
</script>
<?php
include_once '../../layouts/foot.php';
?>