<?php
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if(!$getUser){
    header("location: $welecome");
}
$title = "Lịch sử giao dịch";
$showDatabase = true;
include_once '../../layouts/head.php';
?>


<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Lịch sử nạp</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Client</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lịch sử nạp</li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lịch sử nạp</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-center">
                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Loại</th>
                                            <th class="wd-15p border-bottom-0">Mã Gd</th>
                                            <th class="wd-20p border-bottom-0">Số tiền</th>
                                            <th class="wd-15p border-bottom-0">Trạng thái</th>
                                            <th class="wd-15p border-bottom-0">Ngày nạp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $order = $DUONGSHADO->get_list("SELECT * FROM history_banking WHERE email = '$my_email' ");
                                        foreach ($order as $data) { ?>
                                            <tr>
                                                <td><?= $data['type'] ?></td>
                                                <td><?= $data['id_bank'] ?></td>
                                                <td><?= $data['money'] ?></td>
                                                <td>
                                                    <span class="badge badge-success bg-success"><?= $data['trangthai'] ?></span>
                                                </td>
                                                <td><?= $data['dated_bank'] ?></td>
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
    <script> function cancel(id, type) { Swal.fire({ title: 'Bạn có chắc chắn?', text: "Bạn có muốn xóa đơn hàng này không?", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Xóa!' }).then((result) => { if (result.isConfirmed) { $.ajax({ url: "<?=BASE_URL('service/facebook/cancel/order')?>", type: "POST", data: { id: id, type: type }, dataType: "JSON", success: function(data) { if(data.code == 200){ Swal.fire('Thành công', data.message, 'success'); setTimeout(function(){ location.reload(); }, 2000); }else{ Swal.fire('Thất bại', data.message, 'error'); } }, }); } }); } </script>
</div>
<?php include_once '../../layouts/foot.php'; ?>