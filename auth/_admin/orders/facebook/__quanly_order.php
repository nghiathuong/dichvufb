<?php
require_once '../../../../database/config.php';
require_once '../../../../database/function.php';
if ($getUser['level'] == 4) { ?>
    <?php
    $title = "Quản lí đơn hàng";
    $showDatabase = true;
    include_once '../../../../public/layouts/head.php';
    ?>



    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- container -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Quản lí đơn hàng</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lí đơn hàng</li>
                        </ol>
                    </div>

                </div>
                <!-- PAGE-HEADER END -->
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quản lí đơn hàng</h3>
                                <button type="submit" class="btn btn-primary mx-auto" id="btn_update">Duyệt đã chọn</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-15p border-bottom-0">Loại dịch vụ</th>
                                                <th class="wd-20p border-bottom-0">Số lượng</th>
                                                <th class="wd-15p border-bottom-0">Tổng tiền</th>
                                                <th class="wd-10p border-bottom-0">Link buff</th>
                                                <th class="wd-25p border-bottom-0">Server</th>
                                                <th class="wd-25p border-bottom-0">Cảm xúc</th>
                                                <th class="wd-25p border-bottom-0">Bình luận</th>
                                                <th class="wd-25p border-bottom-0">Trạng thái</th>
                                                <th class="wd-25p border-bottom-0">Đã buff</th>
                                                <th class="wd-25p border-bottom-0">Mã GD</th>
                                                <th class="wd-25p border-bottom-0">Ngày tạo</th>
                                                <th class="wd-25p border-bottom-0"> Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $list_user = $DUONGSHADO->get_list("SELECT * FROM history_order");
                                            foreach ($list_user as $user) {
                                            ?>
                                                <tr>
                                                    <td><?= $user['email'] ?></td>
                                                    <td><?= $user['code_server'] ?></td>
                                                    <td><?= $user['soluong'] ?></td>
                                                    <td><?= $user['tongtien'] ?></td>
                                                    <td><?= $user['link_buff'] ?></td>
                                                    <td><?= $user['server'] ?></td>
                                                    <td><?= $user['camxuc'] ?></td>
                                                    <td><?= $user['cmt'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($user['status'] == 'pending') {
                                                            echo " <span class='badge badge-danger bg-danger'>Chờ duyệt</span>";
                                                        } elseif ($user['status'] == 'start') {
                                                            echo "<span class='badge badge-success bg-success'>Đang chạy</span>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?= $user['da_buff'] ?></td>
                                                    <td><?= $user['code_order'] ?></td>
                                                    <td><?= $user['order_date'] ?></td>
                                                    <td>
                                                        <?php if ($user['status'] == 'pending') { ?>
                                                            <input type="checkbox" name="order_id[]" id="order_id" value="<?= $user['id'] ?>">
                                                        <?php } else{?>
                                                            <a href="javascript:void(0)" class="btn btn-primary">Hủy</a>
                                                        <?php } ?>
                                                        <a href="#" class="btn btn-danger">Xóa</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- container-closed -->
        </div>
    </div> <script> $(document).ready(function() { $('#btn_update').on('click',function(e) { e.preventDefault(); var order_id = []; $.each($("input[name='order_id[]']:checked"), function() { order_id.push($(this).val()); }); $.ajax({ url: '<?=BASE_URL("_admin/oders/xuly")?>', method: 'POST', data: { order_id: order_id },dataType: 'json', success: function(data) { if(data.status == 200){ Swal.fire('Thành công', data.message, 'success'); } } }); }); }); </script>
    <?php include_once '../../../../public/layouts/foot.php'; ?>
<?php } else {
    header('location:../../../404.php');
} ?>