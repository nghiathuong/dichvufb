<?php
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if (!isset($_SESSION['email_user'])) {
    header("location: $welecome");
}
$title = "Tăng like Bài viết";
include_once '../../layouts/head.php';

?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <div class="page-header">
                <h1 class="page-title">like bài viết Speed</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Facebook</a></li>
                        <li class="breadcrumb-item active" aria-current="page">bài like viết Speed</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
                    <div class="card cart">
                        <div class="card-header">
                            <h3 class="card-title">Tăng like bài viết Speed</h3>
                            <div class="card-title text-white justify-content-end mx-auto">
                                <a href="<?= BASE_URL('service/facebook/like-post-speed/order') ?>" class="btn btn-success">Lịch sử mua</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?= BASE_URL('service/api/facebook/like-post-speed') ?>" method="POST" request-ajax="LBD" call="swal" href="like-post-speed">
                                <div class="form-group">
                                    <label for="" class="form-label">Link bài viết</label>
                                    <input type="text" class="form-control py-3" placeholder="Nhập link bà viết" name="link_post" id="link_post">
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Máy chủ</label>
                                    <?php
                                    $server = $DUONGSHADO->get_list("SELECT * FROM service_server WHERE code_server = 'like_post_speed' AND status_server = 'active' AND key_server = 'facebook_service'");
                                    foreach ($server as $server) {
                                    ?>
                                        <div class="form-check">
                                            <div class="custom-switch form-switch me-2 pl-4">
                                                <input type="radio" name="server" class="form-check-input" id="server" onchange="bill()" value="<?= $server['server_service'] ?>" rate="<?= $server['rate'] ?>" checked>
                                                <?= $server['server_service'] ?> (<?= $server['title_server'] ?>)
                                                <span class="badge badge-success bg-success"><?= $server['rate'] ?>/like</span>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="alert alert-danger bg-danger text-white">
                                    <h3>Thông tin máy chủ</h3>
                                    - Mua bằng ID bài viết đã mở chế độ công khai, có nút like. <br />
                                    - Không hỗ trợ cho các bài viết hoặc video đang chạy ads.
                                    - Tăng like bài viết của group thì group phải công khai và object_id phải là dạng idgroup_idpost, ví dụ: 53489350092255_53684602739369 (chỉ hỗ trợ cho sv1, sv2, sv3)
                                    - Sv1 tốc độ lên nhanh, max 100k like. <br />
                                    - Sv2 tốc độ lên nhanh, max 10k like. <br />
                                    - Sv3 tốc độ lên nhanh, max 200k like. <br />
                                    - Sv4 tốc độ lên ổn, max 10k like. <br />
                                    - Sv5 tốc độ lên ổn, max 30k like. <br />
                                    - Sv6 tốc độ lên ổn, max 15k like. <br />
                                    - Nên buff dư cho khách tránh tụt nhé!. <br />
                                    - Chúng tôi không hoàn tiền cho đơn đã thanh toán.
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Chọn cảm xúc</label>
                                    <select name="camxuc" id="camxuc" class="form-control">
                                        <option value="like">Like</option>
                                        <option value="love">love</option>
                                        <option value="care">Thương thương</option>
                                        <option value="haha">Haha</option>
                                        <option value="wow">Wow</option>
                                        <option value="sad">Buồn</option>
                                        <option value="angry">Tức giận</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tốc độ</label>
                                    <div class="form-check">
                                        <div class="custom-switch form-switch me-2 pl-4">
                                            <input type="radio" name="speed" class="form-check-input" id="speed" value="fast" checked> Nhanh
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="custom-switch form-switch me-2 pl-4">
                                            <input type="radio" name="speed" class="form-check-input" id="speed" value="slow" checked> Chậm
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Số lượng</label>
                                    <input type="number" name="soluong" id="soluong" class="form-control" onkeyup="bill()" value="100">
                                </div>
                                <div class="form-group">
                                    <div class="alert alert-primary bg-primary text-center text-white">
                                        <p>Tổng tiền = (Số lượng) x (Giá 1 like)</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Ghi chú <span class="badge badge-warning bg-warning">Nếu cần</span> </label>
                                    <textarea name="ghichu" id="ghichu" cols="15" rows="3" class="form-control" placeholder="Nhập nội dung"></textarea>
                                </div>
                                <div class="alert alert-success bg-success text-center text-white">
                                    Tổng số tiền: <span class="text-primary" id="payment">0</span> Coin
                                </div>
                                <div class="form-group">
                                    <button type="submit" confirm="Bạn có chắc chắn mua đơn hàng này" class="btn btn-primary btn-block py-3" id="btn_payment">Thanh toán</button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
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
include_once '../../layouts/foot.php';
?>