<?php
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if(!isset($_SESSION['email_user'])){
    header("location: $welecome");
}
if($getUser['level'] ==4){
?>
<?php
$title = "Quản lý thông báo";
$showDatabase = true;
$thongbao_day = $DUONGSHADO->get_row("SELECT * FROM modal_thongbao");
include_once '../../../public/layouts/head.php';
?>


<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Thông báo</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thông báo</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thông báo</h3>
                        </div>
                        <div class="card-body">
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading tab-menu-heading-boxed">
                                    <div class="tabs-menu-boxed">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li><a href="#tab25" class="active" data-bs-toggle="tab">Chỉnh sửa thông báo đẩy</a></li>
                                            <li><a href="#tab26" data-bs-toggle="tab">Thêm thông báo</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab25">
                                            <div class="form-group">
                                                <label for="" class="form-label">Tên</label>
                                                <input type="text" class="form-control" value="<?= $my_name ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="form-label">Nội dung thông báo</label>
                                                <textarea name="" id="note_modal" class="form-control" cols="15" rows="4"><?= $thongbao_day['note'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" id="btn_update_modal" class="btn btn-primary btn-block">Thay đổi</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab26">
                                            <div class="form-group">
                                                <label for="" class="form-label">Nội dung</label>
                                                <textarea name="" class="form-control" id="noidung" cols="15" rows="4" placeholder="nhập nội dung"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit"id="btn_add_thongbao" class="btn btn-primary btn-block">Thêm</button>
                                            </div>
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
                                                                        <th class="wd-15p border-bottom-0">Họ tên</th>
                                                                        <th class="wd-15p border-bottom-0">Nội dung</th>
                                                                        <th class="wd-20p border-bottom-0">Ngày</th>
                                                                        <th class="wd-25p border-bottom-0">Chức năng</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $thongbaos = $DUONGSHADO->get_list("SELECT * FROM thongbao");
                                                                    foreach ($thongbaos as $thongbaos) {
                                                                    ?>
                                                                        <tr>
                                                                            <td><?= $thongbaos['name'] ?></td>
                                                                            <td><?= $thongbaos['noidung'] ?></td>
                                                                            <td><?= $thongbaos['date'] ?></td>
                                                                            <td>
                                                                                <a href="<?=BASE_URL('_admin/thongbao/remove?id=')?><?=$thongbaos['id']?>" class="btn btn-danger">Xóa</a>
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
<script> $(document).ready(function(){ $('#btn_update_modal').on('click', function(e){ e.preventDefault(); var note = $('#note_modal').val(); $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }); $('#btn_update_modal').html('<i class="fa fa-spinner fa-spin"></i> Đang thay đổi').attr('disabled', 'disabled'); $.ajax({ url: "<?=BASE_URL('_admin/thongbao/add-modal')?>", type: 'POST', data: { '_token': $('meta[name="csrf-token"]').attr('content'), 'note': note }, dataType: 'JSON', success: function(data){ if(data.status == 200){ Swal.fire('Thành công', data.message, 'success'); $('#btn_update_modal').html('Thay đổi').removeAttr('disabled'); }else{ Swal.fire('Thất bại', data.message, 'error'); $('#btn_update_modal').html('Thay đổi').removeAttr('disabled'); } } }); }); }); </script>
<script> $(document).ready(function(){ $('#btn_add_thongbao').on('click', function(e){ e.preventDefault(); var noidung = $('#noidung').val(); $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }); $('#btn_add_thongbao').html('<i class="fa fa-spinner fa-spin"></i> Đang thêm').attr('disabled', 'disabled'); $.ajax({ url: "<?=BASE_URL('_admin/thongbao/add')?>", type: 'POST', data: { '_token': $('meta[name="csrf-token"]').attr('content'), 'noidung': noidung }, dataType: 'JSON', success: function(data){ if(data.status == 200){ Swal.fire('Thành công', data.message, 'success'); $('#btn_add_thongbao').html('Thêm').removeAttr('disabled'); setTimeout(function(){location.reload()},2000); }else{ Swal.fire('Thất bại', data.message, 'error'); $('#btn_add_thongbao').html('Thêm').removeAttr('disabled'); } } }); }); }); </script>
<?php include_once '../../../public/layouts/foot.php'; ?>
<?php }?>