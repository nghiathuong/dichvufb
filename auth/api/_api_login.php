<?php
require_once '../../database/function.php';
require_once '../../database/config.php';

if (isset($_SESSION['email_user'])) {
    header('location: /');
}

if (!isset($_POST['_token'])) {
    echo requestJson(400, false, "Lỗi không xác định");
} elseif (isset($_POST['_token']) == $_SESSION['csrf_token']) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty(check_string($_POST['email'])) || empty(check_string($_POST['password']))) {
            echo requestJson(400, false, "Vui lòng nhập đầy đủ thông tin");
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo requestJson(400, false, "Email không hợp lệ");
        } else {
            $email = check_string($_POST['email']);
            $password = check_string($_POST['password']);
            $check_user = $DUONGSHADO->get_row("SELECT * FROM users WHERE email = '$email' ");

            if (!$check_user) {
                echo requestJson(400, false, "Email không tồn tại");
            } elseif ($check_user['hoatdong'] == 0) {
                echo requestJson(400, false, "Tài khoản đã bị khóa");
            } elseif (password_verify($password, $check_user['password'])) {
                $_SESSION['email_user'] = $email;
                setcookie('mxho.net', encode_email($email), time() + (86400 * 30), "/");
                echo requestJson(200, true, "Đăng nhập thành công");
            } else {
                echo requestJson(400, false, "Mật khẩu không chính xác");
            }
        }
    }
} else {
    echo JSON(400, "Có lỗi sảy ra");
}
?>