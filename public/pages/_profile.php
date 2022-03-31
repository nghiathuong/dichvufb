<?php
include '../../database/config.php';
include '../../database/function.php';
$title = "Tài khoản của tôi";
if(!$getUser){
    header("location: $welecome");
}
include '../layouts/head.php';
?>

<!--app-content open-->
<div class="main-content app-content mt-0">

    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Edit Profile</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Thông tin tài khoản</div>
                        </div>
                        <div class="card-body">
                            <div class="text-center chat-image mb-5">
                                <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                    <a class="" href="profile.html"><img alt="avatar" src="https://i.ibb.co/vd2T9Ry/logo-2-d.png" class="brround"></a>
                                </div>
                                <div class="main-chat-msg-name">
                                    <a href="profile.html">
                                        <h5 class="mb-1 text-dark fw-semibold"><?=$my_name?></h5>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 pt-0 fs-13">(<?=$lever_user?>)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" value="<?=$my_name?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Số tiền</label>
                                        <input type="number" class="form-control" value="<?=format_money($my_money)?>" disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Email</label>
                                        <input type="text" class="form-control" value="<?=$my_email?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Thời gian tham gia</label>
                                        <input type="text" class="form-control" value="<?=$getUser['register_date']?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thay đổi mật khẩu</h3>
                        </div>
                        <div class="card-body">
                            <div id="msg"></div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu cũ</label>
                                <input type="password" class="form-control" id="password_old" placeholder="Nhập mật khẩu cũ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu mới</label>
                                <input type="password" class="form-control" id="password_new" placeholder="Nhập mật khẩu mới">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nhập lại Mật khẩu mới</label>
                                <input type="password" class="form-control" id="comfirm_password" placeholder="Nhập mật khẩu mới">
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary btn-block" id="btn_change_password"> <i class="ti-lock"></i> Thay đổi</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
        <!-- container-closed -->
    </div>
</div>
<script> $(document).ready(function(){ $('#btn_change_password').on('click', function(e){ e.preventDefault(); var _token = $('meta[name="csrf-token"]').attr('content'); var password_old = $('#password_old').val(); var password_new = $('#password_new').val(); var comfirm_password = $('#comfirm_password').val(); $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } }); $('#btn_change_password').html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').attr('disabled', 'disabled'); $.ajax({ 'url': '<?=BASE_URL("user/change_password")?>', 'type': 'POST', 'data': { '_token': _token, 'password_old': password_old, 'password_new': password_new, 'comfirm_password': comfirm_password }, 'dataType': 'json', 'success': function(res){ if(res.status == 200){ $('#msg').html('<div class="alert alert-success">'+res.message+'</div>'); $('#btn_change_password').html('<i class="ti-lock"></i> Thay đổi').removeAttr('disabled'); }else{ $('#msg').html('<div class="alert alert-danger">'+res.message+'</div>'); $('#btn_change_password').html('<i class="ti-lock"></i> Thay đổi').removeAttr('disabled'); } } }); }); }); </script>
<?php
include '../layouts/foot.php';
?>