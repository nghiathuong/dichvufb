<?php
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if($getUser['level'] ==4){?>
<?php
$title = "Lịch sử nạp nười dùng";
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
                <h1 class="page-title">Lịch sử nạp người dùng</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lịch sử nạp người dùng</li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lịch sử nạp người dung</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-center">
                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Email</th>
                                            <th class="wd-15p border-bottom-0">Số tiền</th>
                                            <th class="wd-20p border-bottom-0">Tên</th>
                                            <th class="wd-15p border-bottom-0">Trạng thái</th>
                                            <th class="wd-25p border-bottom-0">Ngày nạp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $list_user = $DUONGSHADO->get_list("SELECT * FROM history_banking");
                                        foreach ($list_user as $user) {
                                        ?>
                                            <tr>
                                                <td><?= $user['email'] ?></td>
                                                <td><?= $user['money'] ?></td>
                                                <td><?= $user['name_bank'] ?></td>
                                                <td><span class="badge badge-success bg-success"> <?= $user['trangthai'] ?></span></td>
                                                <td><?= $user['dated_bank'] ?></td>
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