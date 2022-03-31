<?php
require_once '../../database/config.php';
require_once '../../database/function.php';
if(!$getUser){
    header("location: $welecome");
}
$title = "Nạp tiền tài khoản";
$showDatabase = true;
$codeBank = $DUONGSHADO->get_row("SELECT * FROM users WHERE email = '$my_email' ");
if($tongnap > 100000){
    $updt = $DUONGSHADO->update('users',[
        'capbac' => 2
    ], "email = '$my_email'");
}elseif($tongnap > 2000000){
    $updt = $DUONGSHADO->update('users',[
        'capbac' => 3
    ], "email = '$my_email'");
}
include_once '../layouts/head.php';
?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Nạp tiền</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Banking</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-4 OPEN -->
            <div class="row">
                <?php
                $banking = $DUONGSHADO->get_list("SELECT * FROM stk_bank");
                foreach ($banking as $bank) {
                ?>
                    <div class="col-md-12 col-xl-4">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h4 class="card-title">Tên bank: <?= $bank['type'] ?></h4>
                                <p class="card-text">Số tài khoản: <?= $bank['stk'] ?></p>
                                <p class="card-text">Chủ tài khoản: <?= $bank['name'] ?></p>
                                <p class="card-text">Nạp ít nhất: <?= format_money($bank['min']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- COL END -->
            </div>
            <div class="mt-3">
                <div class="card shadow">
                    <div class="card-body text-white">
                        <h3 class="card-title">Nội dung chuyển khoản</h3>
                        <div class="mt-3 ">
                            <div class="alert alert-primary bg-primary text-white py-4 text-center justify-content-center">
                                <a href="javascript:;" class="btn btn-outline-primary text-white">
                                    <input type="text" name="" id="code_bank" disabled value="<?=$codeBank['code_bank']?>" class="form-control text-center">
                                </a> <button class="btn text-white btn-outline-danger" type="button" id="coppy">Sao chép</button>
                            </div>
                        </div>
                        <div class="alert alert-danger bg-danger text-white mt-3">
                            <h4>- Bạn vui lòng chuyển khoản chính xác nội dung để được cộng tiền nhanh nhất.
                                - Nếu sau 10 phút từ khi tiền trong tài khoản của bạn bị trừ mà vẫn chưa được cộng tiền vui liên hệ Admin để được hỗ trợ.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-closed -->
    </div>
</div>

<script>
    //code coppy value
    $('#coppy').click(function() {
        var code = $('#code_bank').val();
        Swal.fire('Thông báo', 'Đã sao chép thành công', 'success');
        navigator.clipboard.writeText(code);
    });
</script>
<?php 
    if(isset($_SESSION['success'])){
        echo '<script>
        Swal.fire({
            title: "Thành công",
            text: "'.$_SESSION['success'].'",
            icon: "success",
            confirmButtonText: "OK"
        })
        </script>';
        unset($_SESSION['success']);
    }else{

    }
?>
<?php
include_once '../layouts/foot.php';
?>