<?php
require_once '../../database/function.php';
require_once '../../database/config.php';

if (isset($_SESSION['email_user'])) {
    header('location: /');
}

if (!isset($_POST['_token'])) {
    //echo JSON(400, "Có lỗi sảy ra");
    echo requestJson(400, false, "Có lỗi sảy ra");
} elseif ($_POST['_token'] == $_SESSION['csrf_token']) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (empty(check_string($_POST['name'])) || empty(check_string($_POST['email'])) || empty(check_string($_POST['password']))) {
            echo requestJson(400, false, "Vui lòng nhập đầy đủ thông tin");
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo requestJson(400, false, "Email không hợp lệ");
        } else {
            $name = check_string($_POST['name']);
            $email = check_string($_POST['email']);
            $password = check_string($_POST['password']);
            //generate token
            $token = md5(uniqid(rand(), true));
            //create random int max 8
            $random = rand(100000, 999999);

            $check_email = $DUONGSHADO->num_rows("SELECT * FROM users WHERE email = '$email'");
            if ($check_email) {
                echo requestJson(400, false, "Email đã tồn tại");
            } else {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $create = $DUONGSHADO->insert('users', [
                    'fullname' => $name,    
                    'email' => $email,
                    'password' => $password,
                    'api_token' => $token,
                    'money' => 0,
                    'level' => 1,
                    'hoatdong' => 1,
                    'tongnap' => 0,
                    'da_mua' => 0,
                    'capbac' => 1,
                    'code_bank' => 'mxho_' . $random,
                    'register_date' => date('Y-m-d H:i:s'),
                    'ip_address' => $_SERVER['REMOTE_ADDR']
                ]);
                if ($create) {
                    echo requestJson(200, true, "Đăng ký thành công");
                } else {
                    echo requestJson(400, false, "Có lỗi sảy ra");
                }
            }
        }
    }
} else {
    echo JSON(400, "Có lỗi sảy ra");
}
?>
