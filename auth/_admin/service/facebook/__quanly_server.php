<?php
require_once '../../../../database/config.php';
require_once '../../../../database/function.php';
if ($getUser['level'] == 4) { ?>
    <?php
    $title = "Quản lí người dùng";
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
                    <h1 class="page-title">Quản lí dịch vụ Facebook</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lí dịch vụ Facebook</li>
                        </ol>
                    </div>

                </div>
                <!-- PAGE-HEADER END -->
                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quản lí dịch vụ Facebook</h3>
                                <div class="mx-auto">
                                    <a class="modal-effect btn btn-success-light" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#add_sv">Thêm dịch vụ</a>   
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">Code server</th>
                                                <th class="wd-15p border-bottom-0">Server</th>
                                                <th class="wd-20p border-bottom-0">Rate</th>
                                                <th class="wd-15p border-bottom-0">Title</th>
                                                <th class="wd-10p border-bottom-0">Status</th>
                                                <th class="wd-25p border-bottom-0">Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $list_user = $DUONGSHADO->get_list("SELECT * FROM service_server WHERE key_server = 'facebook_service' ");
                                            foreach ($list_user as $user) {
                                            ?>
                                                <tr>
                                                    <td><?= $user['code_server'] ?></td>
                                                    <td><?= $user['server_service'] ?></td>
                                                    <td><?= $user['rate'] ?></td>
                                                    <td><?= $user['title_server'] ?></td>
                                                    <td>
                                                        <?php
                                                        if ($user['status_server'] == 'active') {
                                                            echo " <span class='badge badge-success bg-success'>Đang chạy</span>";
                                                        } elseif ($user['status_server'] == 'stop') {
                                                            echo " <span class='badge badge-danger bg-danger'>Đã dừng</span>";
                                                        } else {
                                                            echo " <span class='badge badge-danger bg-danger'>Kiểm tra dv này</span>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($user['status_server'] == 'active') {
                                                        ?>
                                                            <a href="javascript:;" class="btn btn-warning" onclick="change('<?= $user['id'] ?>', 'tatsv')">Tắt</a>
                                                        <?php } else { ?>
                                                            <a href="javascript:;" class="btn btn-success" onclick="change('<?= $user['id'] ?>', 'batsv')">Bật</a>
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
        <script>
            function change(id, type) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "<?= BASE_URL('_admin/service/facebook/xuly') ?>",
                    type: "POST",
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        id: id,
                        type: type
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 200) {
                            Swal.fire('Thành công', data.message, 'success');
                            /*setTimeout(function() {
                                window.location.reload();
                            }, 2000);*/
                        } else {
                            Swal.fire('Thất bại', data.message, 'error');
                        }
                    }
                });
            }
        </script>
    </div>

    <!-- MODAL EFFECTS -->
    <div class="modal fade" id="add_sv">
        <div class="modal-dialog modal-dialog-centered text-start" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Thêm mới dịch vụ</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="" class="form-label">Loại dịch vụ</label>
                        <select name="code_server" id="code_server" class="form-control">
                            <option value="like_post_sale">Like post (Sale)</option>
                            <option value="like_post_speed">Like post (Speed)</option>
                            <option value="cmt_sale">Cmt post (Sale)</option>
                            <option value="sub_vip">Sub/follow (vip)</option>
                            <option value="sub_quality">Sub/follow (quality)</option>
                            <option value="sub_sale">Sub/follow (sale)</option>
                            <option value="sub_speed">Sub/follow (speed)</option>
                            <option value="like_page_vip">Sub/follow page (vip)</option>
                            <option value="like_page_sale">Sub/follow page (sale)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Chọn server</label>
                        <select name="server" id="server" class="form-control">
                            <option value="sv1">Sv1</option>
                            <option value="sv2">Sv2</option>
                            <option value="sv3">Sv3</option>
                            <option value="sv4">Sv4</option>
                            <option value="sv5">Sv5</option>
                            <option value="sv6">Sv6</option>
                            <option value="sv7">Sv7</option>
                            <option value="sv8">Sv8</option>
                            <option value="sv9">Sv9</option>
                            <option value="sv10">Sv10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Số tiền</label>
                        <input type="number" name="rate" id="rate" class="form-control" placeholder="Nhập số tiền">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Nội dung server</label>
                        <input type="text" name="title_server" id="title_server" class="form-control" placeholder="Nhập tên dịch vụ">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_add">Thêm</button> <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#btn_add').on('click', function(e){
                e.preventDefault();
                var code_server = $('#code_server').val();
                var server = $('#server').val();
                var rate = $('#rate').val();
                var title_server = $('#title_server').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#btn_add').html('<i class="fa fa-spinner fa-spin"></i> Đang thêm...').attr('disabled', 'disabled');
                $.ajax({
                    url: "<?= BASE_URL('_admin/service/facebook/add') ?>",
                    type: "POST",
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        code_server: code_server,
                        server: server,
                        rate: rate,
                        title_server: title_server
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.status == 200) {
                            setTimeout(function() {
                               $('#add_sv').modal('hide');
                                $("#btn_add").html('Thêm').removeAttr('disabled');
                            }, 1000);
                            setTimeout(function() {
                                Swal.fire('Thành công', data.message, 'success');
                                /*setTimeout(function() {
                                    window.location.reload();
                                }, 2000);*/
                            }, 1500);
                        } else {
                            setTimeout(function() {
                                $('#add_sv').modal('hide');
                            }, 1000);
                            setTimeout(function() {
                                $('#btn_add').html('Thêm').removeAttr('disabled');
                                Swal.fire('Thất bại', data.message, 'error');
                            }, 1500);
                        }
                    }
                });
            });
        });
    </script>
    <?php include_once '../../../../public/layouts/foot.php'; ?>
<?php } else {
    header('location: 404');
} ?>