<?php
require_once '../../../../database/config.php';
require_once '../../../../database/function.php';
if (!$getUser) {
    header("location: ../../Auth/login");
} elseif ($getUser['level'] == 4) {
    if (!isset($_POST['_token'])) {
        echo JSON(400, "Bạn không có quyền truy cập vào trang này");
    } elseif (isset($_POST['_token']) == $_SESSION['csrf_token']) {
        if (empty(check_string($_POST['id'])) || empty(check_string($_POST['type']))) {
            echo JSON(400, "Dữ liệu không hợp lệ");
        } else {
            $id = check_string($_POST['id']);
            $type = check_string($_POST['type']);
            if ($type == 'batsv') {
                $update = $DUONGSHADO->update('service_server', [
                    'status_server' => 'active'
                ], "id = '$id' ");
                if ($update) {
                    echo JSON(200, "Bật dịch vụ thành công");
                } else {
                    echo JSON(400, "Bật dịch vụ thất bại");
                }
            } elseif ($type == 'tatsv') {
                $update = $DUONGSHADO->update('service_server', [
                    'status_server' => 'stop'
                ], "id = '$id'");
                if ($update) {
                    echo JSON(200, "Tắt dịch vụ thành công");
                } else {
                    echo JSON(400, "Tắt dịch vụ thất bại");
                }
            }
        }
    } else {
        echo JSON(400, "Bạn không có quyền truy cập vào trang này");
    }
}
