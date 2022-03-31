<?php 
require_once '../../../database/config.php';
require_once '../../../database/function.php';
if(!isset($_SESSION['email_user'])){
    header("location: $welecome");
}
check_ajax_request();
if(!isset($_POST['_token'])){
    echo JSON(400, "Có lỗi sảy ra");
}elseif($_POST['_token'] == $_SESSION['csrf_token']){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty(check_string($_POST['password_old'])) || empty(check_string($_POST['password_new'])) || empty(check_string($_POST['comfirm_password']))){
            echo JSON(400, "Vui lòng nhập đầy đủ thông tin");
        }elseif(check_string($_POST['password_new']) != check_string($_POST['comfirm_password'])){
            echo JSON(400, "Mật khẩu không trùng khớp");
        }elseif(check_string($_POST['password_old']) == check_string($_POST['password_new'])){
            echo JSON(400, "Mật khẩu mới không được trùng với mật khẩu cũ");
        }else{
            $password_old = check_string($_POST['password_old']);
            $password_new = check_string($_POST['password_new']);
            $comfirm_password = check_string($_POST['comfirm_password']);
            $check_pass = $DUONGSHADO->get_row("SELECT * FROM users WHERE email ='$my_email'");
            if(!password_verify($password_old, $check_pass['password'])){
                echo JSON(400, "Mật khẩu cũ không đúng!");
            }elseif($password_new > 5){
                echo JSON(400, "Mật khẩu phải trên 6 kí tự!");
            }elseif(password_verify($password_old, $password_new)){
                echo JSON(400, "Mật khẩu cũ và mật khẩu mới không được giống nhau");
            }elseif($password_new != $comfirm_password){
                echo JSON(400, "Mật khẩu mới và xác nhận mật khẩu không trùng khớp");
            }else{
                $update = $DUONGSHADO->update('users', [
                    'password' => password_hash($password_new, PASSWORD_DEFAULT)
                ], "email = '$my_email' ");
                if($update){
                    echo JSON(200, "Đổi mật khẩu thành công!");
                }else{
                    echo JSON(400, "Thất bại");
                }
            }
        }
    }
}else{
    echo JSON(400, "Có lỗi sảy ra");
}


?>