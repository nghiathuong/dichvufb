<?php
require_once '../../database/config.php';
require_once '../../database/function.php';
if(!$getUser){
    header("location: $welecome");
}
$title = "Lịch sử giao dịch";
$showDatabase = true;
$client = check_string($_GET['order']);
include_once '../layouts/head.php';
?>



<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Lịch sử mua</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Client</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lịch sử mua</li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lịch sử mua</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-center">
                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Dịch vụ</th>
                                            <th class="wd-15p border-bottom-0">Số lượng</th>
                                            <th class="wd-20p border-bottom-0">Tổng tiền</th>
                                            <th class="wd-15p border-bottom-0">Link buff</th>
                                            <th class="wd-15p border-bottom-0">Server</th>
                                            <?php
                                            if ($client == 'like_post_sale') {
                                                echo '<th class="wd-15p border-bottom-0">Cảm xúc</th>';
                                            } elseif ($client == 'like_post_speed') {
                                                echo '<th class="wd-15p border-bottom-0">Cảm xúc</th>';
                                                echo '<th class="wd-15p border-bottom-0">Tốc độ</th>';
                                            } elseif ($client == 'cmt_sale') {
                                                echo '<th class="wd-15p border-bottom-0">Cmt</th>';
                                            }else{
                                                echo '<th class="wd-15p border-bottom-0">Cảm xúc</th>';
                                            }
                                            ?>
                                            <th class="wd-10p border-bottom-0">Nội dung</th>
                                            <th class="wd-25p border-bottom-0">Trạng thái</th>
                                            <th class="wd-25p border-bottom-0">Đã buff</th>
                                            <th class="wd-25p border-bottom-0">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $order = $DUONGSHADO->get_list("SELECT * FROM history_order WHERE code_server = '$client' ");
                                        foreach ($order as $data) { ?>
                                            <tr>
                                                <td><?= $data['code_server'] ?></td>
                                                <td><?= $data['soluong'] ?></td>
                                                <td><?= $data['tongtien'] ?></td>
                                                <td><?= $data['link_buff'] ?></td>
                                                <td><?= $data['server'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($client == 'like_post_sale') {
                                                        echo $data['camxuc'];
                                                    } elseif ($client == 'like_post_speed') {
                                                        echo $data['camxuc'];
                                                    } elseif ($client == 'cmt_sale') {
                                                        echo $data['cmt'];
                                                    }
                                                    ?>
                                                </td>
                                                <?php 
                                                    if($client == 'like_post_speed'){
                                                        echo '<td>'.$data['tocdo'].'</td>';
                                                    }
                                                ?>
                                                <td><?= $data['node'] ?></td>
                                                <td>
                                                    <?php if ($data['status'] == 'pending') { ?>
                                                        <span class="badge badge-warning bg-warning">Chờ duyệt</span>
                                                    <?php } elseif ($data['status'] == 'start') { ?>
                                                        <span class="badge badge-success bg-success">Đang chạy</span>
                                                    <?php } elseif ($data['status'] == 'cancel') { ?>
                                                        <span class="badge badge-danger bg-danger">Đã hủy</span>
                                                    <?php } ?>
                                                </td>
                                                <td><?= $data['da_buff'] ?></td>
                                                <td>
                                                    <?php if ($data['status'] == 'pending') { ?>
                                                        <a href="javascript:;" class="btn btn-danger" cancel="true" onclick="cancel('<?=$data['id']?>', 'can')">Hủy</a>
                                                    <?php } elseif ($data['status'] == 'start') { ?>
                                                        <a href="javascript:;" class="btn btn-danger" cancel="true" onclick="cancel('<?=$data['id']?>', 'can')">Hủy</a>
                                                    <?php } else {
                                                    } ?>
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
    <script> function cancel(id, type) { Swal.fire({ title: 'Bạn có chắc chắn?', text: "Bạn có muốn xóa đơn hàng này không?", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Xóa!' }).then((result) => { if (result.isConfirmed) { $.ajax({ url: "<?=BASE_URL('service/facebook/cancel/order')?>", type: "POST", data: { id: id, type: type }, dataType: "JSON", success: function(data) { if(data.code == 200){ Swal.fire('Thành công', data.message, 'success'); setTimeout(function(){ location.reload(); }, 2000); }else{ Swal.fire('Thất bại', data.message, 'error'); } }, }); } }); } </script>
</div>
<?php include_once '../layouts/foot.php'; ?>