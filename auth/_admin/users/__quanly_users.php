<?php
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if($getUser['level'] ==4){?>
<?php
$title = "Quản lí người dùng";
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
                <h1 class="page-title">Quản lí người dùng</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quản lí người dùng</li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Quản lí người dung</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-center">
                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Họ tên</th>
                                            <th class="wd-15p border-bottom-0">Số tiền</th>
                                            <th class="wd-20p border-bottom-0">Cấp bậc</th>
                                            <th class="wd-15p border-bottom-0">Trạng thái</th>
                                            <th class="wd-10p border-bottom-0">Tổng nạp</th>
                                            <th class="wd-25p border-bottom-0">code bank</th>
                                            <th class="wd-25p border-bottom-0">Ngày tạo</th>
                                            <th class="wd-25p border-bottom-0">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list_user = $DUONGSHADO->get_list("SELECT * FROM users");
                                        foreach ($list_user as $user) {
                                        ?>
                                            <tr>
                                                <td><?= $user['fullname'] ?></td>
                                                <td><?= $user['money'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($user['level'] == 1) {
                                                        echo " <span class='badge badge-danger bg-danger'>Thành viên</span>";
                                                    } elseif ($user['level'] == 2) {
                                                        echo "<span class='badge badge-primary bg-primary'>Đại lý</span>";
                                                    } elseif ($user['level'] == 3) {
                                                        echo "<span class='badge badge-warning bg-warning'>Nhà phân phối</span>";
                                                    } elseif ($user['level'] == 4) {
                                                        echo "<span class='badge badge-success bg-success'>Quản trị viên</span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($user['hoatdong'] == 1) {
                                                        echo " <span class='badge badge-success bg-success'>Hoạt động</span>";
                                                    } elseif ($user['hoatdong'] == 0) {
                                                        echo " <span class='badge badge-danger bg-danger'>Bị khóa</span>";
                                                    } else {
                                                        echo " <span class='badge badge-danger bg-danger'>Kiểm tra người dùng này</span>";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= $user['tongnap'] ?></td>
                                                <td><?= $user['code_bank'] ?></td>
                                                <td><?= $user['register_date'] ?></td>
                                                <td>
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
</div>
<?php include_once '../../../public/layouts/foot.php'; ?>
<?php }else{
    header('location:../../404.php');
}?>