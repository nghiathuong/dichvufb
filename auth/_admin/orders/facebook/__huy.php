<?php
require_once '../../../../database/config.php';
require_once '../../../../database/function.php';
if (!$getUser) {
    header("location: $welecome");
} elseif (empty(check_string($_POST['id'])) || empty(check_string($_POST['type']))) {
    echo JSON(400, "Tham số không hợp lệ");
} else {
    $id = check_string($_POST['id']);
    $type = check_string($_POST['type']);
    if ($type == 'cancel') {
        $updaye = $DUONGSHADO->update('history_order', [
            'status' => 'cancel'
        ], "id = '$id'");
        if ($updaye) {
            echo JSON(200, "Đã hủy thành công");
        } else {
            echo JSON(400, "Đã xảy ra lỗi");
        }
    } elseif ($type == 'del') {
        $del = $DUONGSHADO->remove('history_order', "id = '$id'");
        if ($del) {
            echo JSON(200, "Đã xóa thành công");
        } else {
            echo JSON(400, "Đã xảy ra lỗi");
        }
    }
}
