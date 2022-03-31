<?php
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if (!isset($_SESSION['email_user'])) {
    header("location: $welecome");
}
if ($getUser['level'] == 4) {
?>
    <?php
    $tsr = $DUONGSHADO->get_row("SELECT * FROM options WHERE name = 'thesieure' ");
    $title = "Quản lý ngân hàng";
    $showDatabase = true;
    include_once '../../../public/layouts/head.php';
    ?>


    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- container -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Cài đặt ngân hàng</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cài đặt ngân hàng</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cài đặt ngân hàng</h3>
                            </div>
                            <div class="card-body">
                                <div class="panel panel-primary">
                                    <div class="tab-menu-heading tab-menu-heading-boxed">
                                        <div class="tabs-menu-boxed">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li><a href="#tab25" class="active" data-bs-toggle="tab">Chỉnh sửa nạp thẻ</a></li>
                                                <li><a href="#tab26" data-bs-toggle="tab">Thêm ngân hàng</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab25">
                                                <form action="<?= BASE_URL('api/_admin/recharge/edit-card') ?>" request-ajax="LBD" method="POST" call="swal" href="banking?id">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="" class="form-label">Site nạp thẻ</label>
                                                            <select name="site_nap" id="site_nap" class="form-control">
                                                                <option value="gachthengay">gachthengay.net</option>
                                                                <option value="thesieure">thesieure.com</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="" class="form-label">KEY API:</label>
                                                            <input type="text" class="form-control" name="keyAPI" value="<?= $tsr['value'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" confirm="Bạn có muốn thay đổi" class="btn btn-primary btn-block"> <i class="fe fe-send"></i> Thay đổi</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab26">
                                                <form action="<?= BASE_URL('api/_admin/recharge/add-banking') ?>" method="POST" request-ajax="LBD" call="swal" href="#">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="" class="form-label">Tên chủ tài khoản</label>
                                                            <input type="text" class="form-control py-2" name="name_stk" placeholder="Nhập tên chủ tài khoản">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="" class="form-label">Số tài khoản</label>
                                                            <input type="text" class="form-control py-2" name="number_stk" placeholder="Nhập số tài khoản">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="" class="form-label">Nạp tối thiểu</label>
                                                            <input type="text" class="form-control py-2" name="min_bank" placeholder="Nạp tối thiểu">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="" class="form-label">Tên ngân hàng</label>
                                                            <input type="text" class="form-control py-2" name="name_bank" placeholder="Logo ngân hàng">
                                                        </div>
                                                        <div class="form-group mx-auto">
                                                            <button class="btn btn-primary mx-auto btn-block" type="submit"> <i class="fe fe-send"></i> Thêm</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="mt-3">
                                                    <div class="card shadow">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Lịch sử</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive text-center">
                                                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="wd-15p border-bottom-0">Tên ngân hàng</th>
                                                                            <th class="wd-15p border-bottom-0">Số tài khoản</th>
                                                                            <th class="wd-20p border-bottom-0">Tên</th>
                                                                            <th class="wd-25p border-bottom-0">Chức năng</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $thongbaos = $DUONGSHADO->get_list("SELECT * FROM stk_bank");
                                                                        foreach ($thongbaos as $thongbaos) {
                                                                        ?>
                                                                            <tr>
                                                                                <td><?= $thongbaos['type'] ?></td>
                                                                                <td><?= $thongbaos['stk'] ?></td>
                                                                                <td><?= $thongbaos['name'] ?></td>
                                                                                <td>
                                                                                    <a href="javascript:;" onclick="del('<?= $thongbaos['id'] ?>')" class="btn btn-danger">Xóa</a>
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
                                        </div>
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
    <script> function del(id) { Swal.fire({ title: 'Xác nhận thao tác?', text: "Bạn sẽ không thể khôi phục lại dữ liệu này!", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Xác nhận', }).then((result) => { if (result.isConfirmed) { $.ajax({ url: '<?= BASE_URL('api/_admin/recharge/del-banking') ?>', type: 'POST', data: { '_token': $('meta[name="csrf-token"]').attr('content'), id: id },dataType: 'JSON', success: function(data) { if(data.code == 200){ Swal.fire('Thành công!', data.message, 'success'); setTimeout(function(){ location.reload(); }, 1000); }else{ Swal.fire('Thất bại!', data.message, 'error'); } } }); } }); } </script>
    <?php include_once '../../../public/layouts/foot.php'; ?>
<?php } ?>