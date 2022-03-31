<?php
require_once '../../../../database/config.php';
require_once '../../../../database/function.php';
if ($getUser['level'] == 4) { ?>
    <?php
    $title = "Quản lí dịch vụ sub page sale";
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
                    <h1 class="page-title">Quản lí dịch vụ sub page sale</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lí dịch vụ sub page sale</li>
                        </ol>
                    </div>

                </div>
                <!-- PAGE-HEADER END -->
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quản lí dịch vụ sub page sale</h3>
                                <button type="submit" class="btn btn-primary mx-auto" id="btn_update">Duyệt đã chọn</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-20p border-bottom-0">Số lượng</th>
                                                <th class="wd-15p border-bottom-0">Tổng tiền</th>
                                                <th class="wd-10p border-bottom-0">Link buff</th>
                                                <th class="wd-25p border-bottom-0">Server</th>
                                                <th class="wd-25p border-bottom-0">Trạng thái</th>
                                                <th class="wd-25p border-bottom-0">Đã buff</th>
                                                <th class="wd-25p border-bottom-0">Mã GD</th>
                                                <th class="wd-25p border-bottom-0">Ngày tạo</th>
                                                <th class="wd-25p border-bottom-0"> Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $list_user = $DUONGSHADO->get_list("SELECT * FROM history_order WHERE code_server = 'like_page_sale'");
                                            foreach ($list_user as $user) {
                                            ?>
                                                <tr>
                                                    <td><?= $user['email'] ?></td>
                                                    <td><?= $user['soluong'] ?></td>
                                                    <td><?= $user['tongtien'] ?></td>
                                                    <td><?= $user['link_buff'] ?></td>
                                                    <td><?= $user['server'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($user['status'] == 'pending') {
                                                            echo " <span class='badge badge-warning bg-warning'>Chờ duyệt</span>";
                                                        } elseif ($user['status'] == 'start') {
                                                            echo "<span class='badge badge-success bg-success'>Đang chạy</span>";
                                                        } elseif ($user['status'] == 'cancel') {
                                                            echo "<span class='badge badge-danger bg-danger'>Đã hủy</span>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?= $user['da_buff'] ?></td>
                                                    <td><?= $user['code_order'] ?></td>
                                                    <td><?= $user['order_date'] ?></td>
                                                    <td>
                                                        <?php if ($user['status'] == 'pending') { ?>
                                                            <input type="checkbox" name="order_id[]" id="order_id" value="<?= $user['id'] ?>">
                                                        <?php } elseif ($user['status'] == 'start') { ?>
                                                            <a href="javascript:void(0)" class="btn btn-primary" onclick="cancel('<?= $user['id'] ?>', 'cancel')">Hủy</a>
                                                        <?php } ?>
                                                        <a href="#" class="btn btn-danger" onclick="cancel('<?= $user['id'] ?>', 'del')">Xóa</a>
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
    </div>
    <script>
        function cancel(id, type) {
            $.ajax({
                url: "<?= BASE_URL('_admin/oders/huy') ?>",
                type: "POST",
                data: {
                    type: type,
                    id: id
                },
                dataType: "json",
                success: function(data) {
                    if (data.status == 200) {
                        Swal.fire('Thông báo', data.message, 'success');
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    } else {
                        Swal.fire('Thông báo', data.message, 'error');
                    }
                }
            });
        }
    </script> <script> $(document).ready(function() { $('#btn_update').on('click', function(e) { e.preventDefault(); var order_id = []; Swal.fire({ title: 'Cảnh báo?', text: "Hãy chú ý bạn hãy chọn ít nhất 1 id order để không bị lỗi!", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Tôi đã đọc!' }).then((result) => { if (result.isConfirmed) { $.each($("input[name='order_id[]']:checked"), function() { order_id.push($(this).val()); }); $.ajax({ url: '<?= BASE_URL("_admin/oders/xuly/sub-page-sale") ?>', type: 'POST', data: { order_id: order_id }, dataType: 'json', success: function(data) { if (data.status == 200) { Swal.fire('Thành công', data.message, 'success'); setTimeout(function() { window.location.reload(); }, 2000); } else { Swal.fire('Thất bại', data.message, 'error'); } } }); } }); }); }); </script>
    <?php include_once '../../../../public/layouts/foot.php'; ?>
<?php } else {
    header('location:../../../404.php');
} ?>